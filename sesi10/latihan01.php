<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan From 01</title>
</head>
<body>
    
    <form name="Latihan01" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>

         <div>
            Nama
            <input type="text" name="txNAMA">
        </div>

        <div>
           Jenis Kelamin
            <input type="radio" name="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>

        <div>
            Jurusan
            <select name="txJURUSAN">
                <option valuee="KAB">KAB</option>
                <option valuee="MTI">MTI</option>
                <option valuee="DKV">DKV</option>
                <option valuee="DGM">DGM</option>
                <option valuee="TIPAR">TI PAR</option>
                <option valuee="SK">SK</option>
            </select>

        </div>
        <div>
            Hobi
            <input type="checkbox" name="Musik">Musik
            <input type="checkbox" name="Tari">Tari
            <input type="checkbox" name="Membaca">Membaca
            <input type="checkbox" name="Tidur">Tidur
            <input type="checkbox" name="Joging">Joging
            <input type="checkbox" name="Lari">Lari
            <input type="checkbox" name="Menangis">Menangis
        
        </div>

        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>

    <script> function checkform(frm){
        let f = frm.elements;
        let nim = f.namedItem("txNIM").value;
        let nama = f.namedItem("txNAMA").value;
        let jeniskelamin = f.namedItem("txJK").value;
        let jurusan = f.namedItem("txJURUSAN").value;
        let hobi_musik = f.namedItem("Musik").checked;
        let hobi_tari = f.namedItem("Tari").checked;
        let hobi_membaca = f.namedItem("Membaca").checked;
        let hobi_tidur = f.namedItem("Tidur").checked;
        let hobi_joging = f.namedItem("Joging").checked;
        let hobi_lari = f.namedItem("Lari").checked;
        let hobi_menangis = f.namedItem("Menangis").checked;
           
       
        console.log("NIM: "+nim);
        console.log("NAMA: "+nama);
        console.log("JENIS KELAMIN: "+jeniskelamin);
        console.log("JURUSAN: "+jurusan);
        console.log("HOBI_MUSIK: "+hobi_musik);
        console.log("HOBI_TARI: "+hobi_tari);
        console.log("HOBI_MEMBACA: "+hobi_membaca);
        console.log("HOBI_TIDUR: "+hobi_tidur);
        console.log("HOBI_JOGING: "+hobi_joging);
        console.log("HOBI_LARI: "+hobi_lari);
        console.log("HOBI_MENANGIS: "+hobi_menangis);
        return false;
    }
    
    </script>
</body>
</html>
