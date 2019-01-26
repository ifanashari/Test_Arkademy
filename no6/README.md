Perintah my sql untuk menampilkan record seperti pada tabel adalah
"SELECT product_categories.id, product_categories.name, COUNT(product_categories.id) as jumlah_product FROM products JOIN product_categories ON products.category_id = product_categories.id GROUP BY product_categories.id"
