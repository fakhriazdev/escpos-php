<?php
require __DIR__ . '/vendor/autoload.php'; 

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

try {

    //Step 2: Enable Printer Sharing
    // Right-click on your printer → Printer Properties.
    // Go to the "Sharing" tab.
    // Check "Share this printer".
    // Set a Share Name (e.g., ThermalPrinter).
    // Click OK to save.
    // enter the name of the printer sharing
    //$connector = new WindowsPrintConnector("");

    //Menggunakan LPT printer
    //check LPT printer dengan masuk terminal lalu ketikan mode LPT1
    //$connector = new WindowsPrintConnector("LPT1");

    $connector = new RawPrintConnector('USB001');
    // Inisialisasi printer
    $printer = new Printer($connector);

   
    $printer->text("Fakri Ganteng!\n");

    // cut
    $printer->cut();

    // end
    $printer->close();

    echo "Struk berhasil dicetak!";
} catch (Exception $e) {
    echo "Gagal mencetak: " . $e->getMessage();
}
?>
