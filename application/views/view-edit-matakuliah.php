<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Matakuliah</title>
</head>
<body>
    <center>
        <form  method="post" action="<?php echo base_url();?>index.php/matakuliah/update">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Matakuliah
                    </th>
                </tr>
                <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
                <tr>
                    <td>Kode MTK</td>
                    <td>
                        <input type="text" name="kode" id="kode" value="<?=$kode;?>" readonly>
                    </td>
                    <td><?=form_error('kode');?></td>
                </tr>
                <tr>
                    <td>Nama MTK</td>
                    <td><input type="text" name="nama" id="nama"  value="<?=$nama;?>"></td>
                    <td><?=form_error('nama');?></td>
                </tr>
                <tr>
                    <td>SKS</td>
                    <td>
                    <select name="sks" >
                    <option value="">Pilih SKS</option>
                    <option value="2" <?php if($sks==2) echo 'selected';?>>2</option>
                    <option value="3" <?php if($sks==3) echo 'selected';?>>3</option>
                    <option value="4" <?php if($sks==4) echo 'selected';?>>4</option>
                    </select></td>
                    <td><?=form_error('sks');?></td>
                </tr>                  
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Update">
                        <input type="button" value="Kembali" onclick="window.history.go(-1)">
                    </td>
                </tr>              
            </table>
        </form>
    </center>
</body>
</html>