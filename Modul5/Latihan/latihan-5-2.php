<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <title>Kalkulator sederhana</title>  
</head>  
<body>  
    <form id="form_text" name="form_text" method="POST" action="latihan-5-2-aksi.php">  
        <table width="400" cellspacing="0" cellpadding="3">  
            <tr>  
                <td>Angka 1</td>  
                <td><input type="text" name="angka1" /></td>  
            </tr>  
            <tr>  
                <td>Operator</td>  
                <td>  
                    <input type="radio" name="operator" value="tambah" /> +   
                    <input type="radio" name="operator" value="kurang" /> -   
                    <input type="radio" name="operator" value="kali" /> *   
                    <input type="radio" name="operator" value="bagi" /> /   
                    <input type="radio" name="operator" value="modulo" /> %   
                </td>  
            </tr>  
            <tr>  
                <td>Angka 2</td>  
                <td><input type="text" name="angka2" /></td>  
            </tr>  
            <tr>  
                <td></td>  
                <td>  
                    <input type="submit" name="submit" value="Hitung" />  
                    <input type="reset" value="CLEAR" />  
                </td>  
            </tr>  
        </table>  
    </form>  
</body>  
</html>  
