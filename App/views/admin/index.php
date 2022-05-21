<?php require APPROOT .'/views/inc/header.php';?>
<div class="flex h-screen items-center justify-center gap-10 p-5" >
    <?php require APPROOT .'/views/inc/sidebar.php';?>

    <div>
        <div class=" mx-44  grid gap-80 sm:grid-cols-2 lg:grid-cols-3 ">
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-300"><i class="fa-solid fa-graduation-cap"></i></div> <div class="my-5 mx-3">Etudiant <?php echo $data['Students']->count_std; ?></div> </div>
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-500"><i class="fa-solid fa-chalkboard-user"></i></div> <div class="my-5 mx-3">Prof <?php echo $data['Teachers']->count_tch; ?></div> </div>
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-700"><i class="fa-solid fa-landmark"></i></div> <div class="my-5 mx-3">Classes <?php echo $data['Cls']->count_cls; ?></div> </div>
        </div>
        <!-- <div class="flex justify-evenly  ">
            <div class="outer p-40">female 40%</div>
            <div class=" inner rounded-full">male 60%</div>
        </div> -->
        <div class="chart max-w-xs mx-96 my-20" >
            <canvas id="myChart" ></canvas>
        </div>
        
        <div class=" mx-44 grid gap-y-10 gap-x-80 sm:grid-cols-2 lg:grid-cols-3 ">
        <?php foreach($data['Class'] as $class) :?>
            <div class=" flex rounded-lg border-2 w-40 h-16 bg-blue-300"><div class="my-5 mx-3 font-semibold "><?php echo $class->name_class . ' :  ' . $class->cls_std_count; ?> </div> </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>   
<script>
    
    // const labels = ['Genre'];

const data = {
        labels: ['Male','Female'],
        datasets: [{
        label: 'Gender',
        data: [75,25],
        backgroundColor: ['rgb(54, 162, 235)','rgb(255, 99, 132)'],
        width:2,
        hoverOffset: 2
    }]
};

const config = {
    type: 'pie',
    data: data,
};
const myChart = new Chart(document.getElementById('myChart'),config);
</script>

<script src="https://kit.fontawesome.com/2e18c067b3.js" crossorigin="anonymous"></script>
<?php require APPROOT .'/views/inc/footer.php';?>