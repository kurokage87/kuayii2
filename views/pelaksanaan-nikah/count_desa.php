<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="container">
    <table class="table tab-success table-responsive">
        <?php
        foreach ($model as $m) { ?>
        <tr>
            <td><?=$m->jumlah?></td>
            <td><?=$m->k.nama_kec?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
