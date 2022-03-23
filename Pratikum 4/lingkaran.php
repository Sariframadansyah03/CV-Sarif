<?php 
class Lingkaran {
    private $jari;
    const Phi = 3.14;
    function __construct( $r )
    {
        $this->jari = $r;
    }
    function getLuas()
    {
        return self::Phi * $this->jari * $this->jari ;
    }
    
    function getKeliling()
    {
        return 2 * self::Phi * $this->jari;
    }
    }

echo "NILAI Phi : " . Lingkaran::Phi;
$lingkar1 = new Lingkaran( 10 );
$lingkar2 = new Lingkaran( 4 );

echo "<br>Luas Lingkaran I ".$lingkar1->getLuas();
echo "<br>Luas Lingkaran II ".$lingkar2->getLuas();
echo "<br>Keliling Lingkaran I ".$lingkar1->getKeliling();
echo "<br>Keliling Lingkaran II ".$lingkar2->getKeliling();

?>