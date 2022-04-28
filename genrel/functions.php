<?php

function testMessage($condation, $message){
    if ($condation) {
        echo "<div class='alert alert-success mx-auto w-50 my-2'>
                <h3>This $message is True</h3>
              </div>";
    }else{
        echo "<div class='alert alert-danger mx-auto w-50 my-2'>
                <h3>This $message is False</h3>
              </div>";
    }
}



?>