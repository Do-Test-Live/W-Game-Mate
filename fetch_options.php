<?php
session_start();
require_once('include/dbController.php');
$db_handle = new DBController();
$selectedGameType = $_POST['gameType'];
$options='';
if($selectedGameType == '電腦遊戲'){
    $query = $db_handle->runQuery("select * from pc_game");
    $no_query = $db_handle->numRows("select * from pc_game");
        for($i=0; $i < $no_query; $i++){
            $options .= '<option value="' . $query[$i]['game_name'] . '">' . $query[$i]['game_name'] . '</option>';
        }
        echo $options;
}
elseif($selectedGameType == '手機遊戲'){
    $query = $db_handle->runQuery("select * from mobile_game");
    $no_query = $db_handle->numRows("select * from mobile_game");
        for($i=0; $i < $no_query; $i++){
            $options .= '<option value="' . $query[$i]['id'] . '">' . $query[$i]['game_name'] . '</option>';
        }
    echo $options;
}
