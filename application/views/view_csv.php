<table cellpadding="0" cellspacing="0" width="100%">
    <tr>
            <td width = "10%">urut</td>
            <td width = "20%">N0</td>
            <td width = "20%">kursi</td>
            <td width = "30%">nim</td>
            <td width = "10%">nama</td>
            <td width = "10%">ipk</td>
    </tr>

            <?php foreach($csvData as $field){?>
                <tr>
                    <td><?php echo $field['No_urt']?></td>
                    <td><?php echo $field['no']?></td>
                    <td><?php echo $field['kursi']?></td>
                    <td><?php echo $field['nim_yud']?></td>
                    <td><?php echo $field['nam_yud']?></td>
                    <td><?php echo $field['ipk_yud']?></td>
                </tr>
            <?php }?>
</table>