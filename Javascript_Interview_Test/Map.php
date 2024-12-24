<!-- Map : used to create a new array with used to applying function to used with each elements array  -->

<script>

    const array = [10,20,30,40,50];

    const data_store = array.map(num => num * num);

    console.log(data_store);

</script>

<!-- O/P : [100, 400, 900, 1600, 2500] -->

<!-- Filter : Used to find the specifix element of array -->

<script>

    const array1 = [10,20,30,40,50];
    const data_store1 = array1.filter(age => age >= 30); 

    console.log(data_store1);

</script>

<!-- O/P : [30, 40, 50] -->

<!-- Reduce() : To used for single record return the code. to find the arrays -->

<script>

    const array2 = [100,200,300,400,500];

    const data_store2 = array2.reduce((sum,price) => sum + price,0); // 0 + 100 
    console.log(data_store2);

</script>

<!-- O/P : 1500 -->

