<script>

    const products = [
        {
             name: "Laptop",
             price: 50000,
             category: "Dell" 
        },
        {
             name: "Shirts",
             price: 1500,
             category: "Raymond"
        },
        {
            name: "SmartPhones",
            price: 25000,
            category: "Vivo"
        },
        {
            name: "Shoes",
            price: 2000,
            category: "Clothing"
        }
    ];

    const data_store = products
    .filter(product => product.category === "Dell")
    .map(product => product.price)
    .reduce((sum,price) => sum + price,0);

    console.log(data_store);

</script>

<script>

    function fun(){
        const data = [10,20,30];
        console.log(data);
    }

    fun();

<script>