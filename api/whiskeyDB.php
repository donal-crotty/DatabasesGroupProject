<?php

function getWhiskies() {

    $query = "SELECT * FROM whiskies ORDER by Brand";
    try {

        global $db;
        $whiskies = $db->query($query);
        $whiskies = $whiskies->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($whiskies);
    } catch (Exception $ex) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

function getWhiskeyById($id) {
    $query = "SELECT * FROM whiskies WHERE Id ='$id'";
    try {
        global $db;
        $whiskies = $db->query($query);
        $whiskey = $whiskies->fetch(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
        echo json_encode($whiskey);
    } catch (Exception $ex) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

function getWhiskeyByBrand($brand) {
    $query = "SELECT * FROM whiskies WHERE UPPER(Brand) LIKE " . '"%' . $brand . '%"' . " ORDER BY Brand";

    try {
        global $db;
        $whiskies = $db->query($query);
        $whiskey = $whiskies->fetchAll(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
        echo json_encode($whiskey);
    } catch (Exception $ex) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

function addWhiskey() {
    global $app;
    $request = $app->request();
    $whiskey = json_decode($request->getBody());
    $brand = $whiskey->Brand;
    $product = $whiskey->Product;
    $year = $whiskey->Year;
    $description = $whiskey->Description;
    $price = $whiskey->Price;
    $query = "INSERT INTO whiskies (brand, product, year, description, price) VALUES ('$brand', '$product', '$year', '$description', '$price')";

    try {
        global $db;
        $whiskies = $db->exec($query);
        $whiskey->id = $db->lastInsertId();
        echo json_encode($whiskey);
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

function updateWhiskey($id) {
    global $app;
    $request = $app->request();
    $whiskey = json_decode($request->getBody());

    $brand = $whiskey->Brand;
    $product = $whiskey->Product;
    $year = $whiskey->Year;
    $description = $whiskey->Description;
    $price = $whiskey->Price;

    $query = "UPDATE whiskies SET Brand='$brand', Product='$product', Year='$year', Description='$description', Price='$price' WHERE Id = '$id'";

    try {
        global $db;
        $db->exec($query);
        echo json_encode($whiskey);
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

function deleteWhiskey($id) {

    global $app;
    $request = $app->request();
    $whiskey = json_decode($request->getBody());
    
    $query = "DELETE FROM whiskies WHERE Id = '$id'";
    
        try {
        global $db;
        $db->exec($query);
        echo json_encode($whiskey);
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}
?>

