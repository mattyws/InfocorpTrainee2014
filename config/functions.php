<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getPageContent() {    
    if(isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'inicio':
                return './view/inicio.php';
        }
    } else {
        return './view/inicio.php';
    }
}

