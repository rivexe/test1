<?php

class DatatableController implements Controller
{
    public function parseContent(string $html)
    {
        if (isset($_FILES['csvFile']) && $_FILES['csvFile']['name'] !== '') {
            if (($handle = fopen($_FILES['csvFile']['tmp_name'], "r")) !== false) {
                fgetcsv($handle); //пропускаем шапку
                while (($data = fgetcsv($handle)) !== false) {
                    $product = new Product(explode(';', $data[0]));
                    $table .= '<tr>';
                    $table .= '<td>' . $product->getCode() . '</td>';
                    $table .= '<td>' . $product->getName() . '</td>';
                    $table .= '<td>' . $product->getLevel1() . '</td>';
                    $table .= '<td>' . $product->getLevel2() . '</td>';
                    $table .= '<td>' . $product->getLevel3() . '</td>';
                    $table .= '<td>' . $product->getPrice() . '</td>';
                    $table .= '<td>' . $product->getPriceSP() . '</td>';
                    $table .= '<td>' . $product->getAmount() . '</td>';
                    $table .= '<td>' . $product->getPropertyFields() . '</td>';
                    $table .= '<td>' . $product->getJointPurchases() . '</td>';
                    $table .= '<td>' . $product->getUnit() . '</td>';
                    $table .= '<td>' . $product->getPicture() . '</td>';
                    $table .= '<td>' . $product->getDisplayOnMain() . '</td>';
                    $table .= '<td>' . $product->getDescription() . '</td>';
                    $table .= '</tr>';
                }
                fclose($handle);
                return str_replace('{data}', $table, $html);
            }
        }
        else
            return 'Файл для обработки не загружен!';
    }
}