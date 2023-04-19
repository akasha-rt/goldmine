<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class UpdateQuoteData extends SugarApi{
    public function registerApiRest(){
        return array(
            'UpdateQuoteData' => array(
                'reqType' => 'POST',
                'noLoginRequired' => true,
                'path' => array('updatequotedata'),
                'method' => 'MyUpdateQuoteData',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }
 
    public function MyUpdateQuoteData($api, $args){
        $this->requireArgs($args, array('quote_id','name','date_quote_expected_closed'));
        $result = array();
        global $db;
        $quote_id = $args['quote_id'];
        $name = $args['name'];
        $date_quote_expected_closed = $args['date_quote_expected_closed'];
        $sql = 'UPDATE quotes SET name="'.$name.'", date_quote_expected_closed="'.$date_quote_expected_closed.'" WHERE id="'.$quote_id.'"';
        $GLOBALS['log']->fatal($sql);
        $result = $db->query($sql);
        return $result;
    }
}

?>