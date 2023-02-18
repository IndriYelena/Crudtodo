<form id="butamu" name="butamu" method="post" action="kirim.php">
<table width="600" border="0" align="center" cellpadding="8px">
    <tr>
        <td width"150" valign="middle" bgcolor="#99CCFF"><div align="left" class="style3">Tanggal </div></td>
        <td>:</td>
        <td bgcolor="#9999FF"><input type="text" name="tanggal" id="tanggal" size="45" required="" /></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#99CCFF"><div align="left" class="style3">NIK </div></td>
         <td>:</td>
         <td bgcolor="#9999FF"><input type="text" name="nik" id="nik" size="45" required="" /></td>
    </tr>
    <tr>
    <td valign="middle" bgcolor="#99CCFF"><div align="left" class="style3">laporan </div></td>
         <td>:</td>
         <td bgcolor="#9999FF"><input type="text" name="laporan" id="laporan" size="45" required="" /></td>
    </tr>
    <tr>
        <td valign="middle"><span class="style4"></span></td>
        <td>:</td>
        <td><input type="submit" name="kirim" value="kirim" id="kirim" />
        <input type="hidden" name="asal" id="asal" value="<?php echo $_SERVER['PHP_SELF'];?>
      </tr>
      </table>
      <br>