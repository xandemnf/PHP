<?php
/**
 * pretty_json
 * 
 * @param string $json - the original JSON string
 * @param string $ind - the string to indent with
 * @return string
 */
function pretty_json($json, $ind="\t") {
        // Replace any escaped \" marks so we don't get tripped up on quotemarks_counter
        $tokens = preg_split('|([\{\}\]\[,])|', str_replace('\"', '~~PRETTY_JSON_QUOTEMARK~~', $json), -1, PREG_SPLIT_DELIM_CAPTURE);
        $indent = 0;
        $result = "";
        $quotemarks_counter = 0;
        $next_token_use_prefix = true;
        foreach ($tokens as $token) {
                $quotemarks_counter = $quotemarks_counter + (count(explode('"', $token)) - 1);
                if ($token == "") {
                        continue;
                }
                if ($next_token_use_prefix) {
                        $prefix = str_repeat($ind, $indent);
                } else {
                        $prefix = null;
                }
                // Determine if the quote marks are open or closed
                if ($quotemarks_counter & 1) {
                        // odd - thus quotemarks open
                        $next_token_use_prefix = false;
                        $new_line = null;
                } else {
                        // even - thus quotemarks closed
                        $next_token_use_prefix = true;
                        $new_line = "\n";
                }
                if ($token == "{" || $token == "[") {
                        $indent++;
                        $result .= $token . $new_line;
                } else if ($token == "}" || $token == "]") {
                        $indent--;
                        
                        if($indent>=0) {
                                $prefix = str_repeat($ind, $indent);
                        }
                        if ($next_token_use_prefix) {
                                $result .= $new_line . $prefix . $token;
                        } else {
                                $result .= $new_line . $token;
                        }
                } else if ($token == ",") {
                        $result .= $token . $new_line;
                } else {
                        $result .= $prefix . $token;
                }
        }
        $result = str_replace('~~PRETTY_JSON_QUOTEMARK~~', '\"', $result);
        return $result;
}