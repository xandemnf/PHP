cotacao_dolar_Widget extends WP_Widget
{
 
        function cotacao_dolar_Widget(){
            $widget_ops = array( 'description' => 'Exibe a cotação do dolar e euro direto do site do Banco Central' );
            $control_ops = array( 'width' => 250, 'height' => 200 );
            parent::WP_Widget( false, $name = 'Cotação do Dolar', $widget_ops, $control_ops );
        }
 
        /* Displays the Widget in the front-end */
        function widget( $args, $instance ){
            extract($args);
            $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? 'Cotação de Moedas' : esc_html( $instance['title'] ) );
 
            echo $before_widget;
 
            if ( $title ) 
               echo $before_title . $title . $after_title; 
 
            /*  - NÃO ALTERAR - inicio codigo que pega os valores do Banco Central*/
            //$url = file_get_contents('http://www.bcb.gov.br/'); <--- função desativada no servidor!
 
            //get the url via php cURL
            $url = 'http://www.bcb.gov.br/pt-br/paginas/default.aspx';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($ch);
            curl_close($ch);
 
            preg_match_all('/<div class="tabela">(.+)<\/div>/s', $response, $conteudo);
 
            $n = explode('<div class="tabela">', $conteudo[0][0]);
            //print_r($n); 
 
            preg_match_all('/<table border="0" cellpadding="0" cellspacing="0">(.+)<\/table>/s', $n[4], $conteudo);
            $newhtml = preg_replace( "/\s+/"," ", $conteudo[0][0]);
            $output = str_replace('<a href="/?TXCOTACAO"> mais moedas</a>', '<a href="http://www.bcb.gov.br/?TXCOTACAO" rel="external">'. __('fonte: bacen') .'</a>', $newhtml);
            $output = str_replace('bgcolor="#f8f5f6"', '', $output);
 
            echo $output;            
            /*  - NÃO ALTERAR - fim do codigo que pega os valores do Banco Central*/
 
            echo $after_widget;
        }
 
        /*Saves the settings. */
        function update( $new_instance, $old_instance ){
            $instance = $old_instance;
            $instance['title'] = strip_tags( $new_instance['title'] );
 
            return $instance;
        }
 
        /*Creates the form for the widget in the back-end. */
        function form( $instance ){
            //Defaults
            $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
 
            $title = esc_attr( $instance['title'] );
 
            # Title
            echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Título da cotação:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></p>';            
 
        }
} // end class
 
function cotacao_dolar_Widget_Init() {
    register_widget('cotacao_dolar_Widget');
}
 
add_action('widgets_init', 'cotacao_dolar_Widget_Init');