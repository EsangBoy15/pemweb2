<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$gender = $_POST['gender'];
$skill = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

function skor_skill[$skills]{
    $skill_list = [
        'HTML' => 10,
        'CSS' => 10,
        'JavaScript' => 20,
        'RwD Bootstrap' => 20,
        'PHP' =>30,
        'Pyhthon' => 30,
        'Java' => 50,
    ];
        
    
    $result = 0;
    foreach($skils as $skill) {
        $result = $result = $skill_list[$skill];
    }

    return $result;
}

function kategori_skill[$skor] {

}

echo "NIM: $nim";
echo "<br> Nama: $nama";
echo "<br> Program Studi: $prodi";
echo "<br> Jenis Kelamin: $gender";
echo "<br> Skill Programming: ";
foreach($skill as $skil){
    echo $skil . ", ";
}
echo "<br> Tempat Domisili: $domisili";
echo "<br> Email: $email";
echo "<br> Skor Skill: ". skor_skill($skill);
echo "<br> Kategori Skill: ";

?>