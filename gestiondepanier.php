<?php
    // Code PHP à intégrer ici, comme dans l'exemple précédent
    $produit1 = ["nom" => "Livre", "prix" => 20, "quantite" => 2];
    $produit2 = ["nom" => "Stylo", "prix" => 3, "quantite" => 5];
    $produit3 = ["nom" => "Sac", "prix" => 25, "quantite" => 1];

    function calculerSousTotal($produit) {
        return $produit['prix'] * $produit['quantite'];
    }

    $sous_total1 = calculerSousTotal($produit1);
    $sous_total2 = calculerSousTotal($produit2);
    $sous_total3 = calculerSousTotal($produit3);

    echo "Le sous-total pour le " . $produit1['nom'] . " est de " . $sous_total1 . " €.<br>";
    echo "Le sous-total pour le " . $produit2['nom'] . " est de " . $sous_total2 . " €.<br>";
    echo "Le sous-total pour le " . $produit3['nom'] . " est de " . $sous_total3 . " €.<br>";

    $total_panier = $sous_total1 + $sous_total2 + $sous_total3;
    echo "Le montant total du panier est de " . $total_panier . " €.<br>";

    if ($total_panier > 50) {
        $reduction = $total_panier * 0.10;
        $total_apres_reduction = $total_panier - $reduction;
        echo "<p class='reduction'>Une réduction de 10% a été appliquée. Le montant après réduction est de " . $total_apres_reduction . " €.</p><br>";
    } else {
        $total_apres_reduction = $total_panier;
    }

    echo "<table>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Sous-total</th>
            </tr>
            <tr>
                <td>{$produit1['nom']}</td>
                <td>{$produit1['prix']} €</td>
                <td>{$produit1['quantite']}</td>
                <td>{$sous_total1} €</td>
            </tr>
            <tr>
                <td>{$produit2['nom']}</td>
                <td>{$produit2['prix']} €</td>
                <td>{$produit2['quantite']}</td>
                <td>{$sous_total2} €</td>
            </tr>
            <tr>
                <td>{$produit3['nom']}</td>
                <td>{$produit3['prix']} €</td>
                <td>{$produit3['quantite']}</td>
                <td>{$sous_total3} €</td>
            </tr>
            <tr class='total'>
                <td colspan='3'>Total</td>
                <td>{$total_apres_reduction} €</td>
            </tr>
          </table>";
    ?>
² 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier en Ligne</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .total {
            font-weight: bold;
        }
        .reduction {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Votre Panier</h1>
    </body>
    </html>