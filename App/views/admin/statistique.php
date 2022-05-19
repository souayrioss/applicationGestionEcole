<?php require APPROOT .'/views/inc/header.php';?>
<div class="flex h-full " >
    <div class="xl:w-1/6 md:w-1/5 w-10   h-full bg-blue-500 rounded-lg  shadow-lg shadow-gray-300">
<?php require APPROOT .'/views/inc/sidebar.php';?>

    </div>
    <div>
        <div class=" mx-44 my-24 grid gap-80 sm:grid-cols-2 lg:grid-cols-3 ">
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-300"><i class="fa-solid fa-graduation-cap"></i></div> <div class="my-5 mx-3">Etudiant 167</div> </div>
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-500"><i class="fa-solid fa-chalkboard-user"></i></div> <div class="my-5 mx-3">Prof 10</div> </div>
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-700"><i class="fa-solid fa-landmark"></i></div> <div class="my-5 mx-3">Classes 8</div> </div>
        </div>
        <!-- <div class="flex justify-evenly  ">
            <div class="outer p-40">female 40%</div>
            <div class=" inner rounded-full">male 60%</div>
        </div> -->
        <div class="chart max-w-sm mx-96">
          <canvas id="myChart" ></canvas>
        </div>
        <div class=" mx-44 my-24 grid gap-y-10 gap-x-80 sm:grid-cols-2 lg:grid-cols-3 ">
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-400"></div> <div class="my-5 mx-3">Etudiant 167</div> </div>
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-400"></div> <div class="my-5 mx-3">Prof 10</div> </div>
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-400"></div> <div class="my-5 mx-3">Classes 8</div> </div>
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-400"></div> <div class="my-5 mx-3">Classes 8</div> </div>
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-400"></div> <div class="my-5 mx-3">Classes 8</div> </div>
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-400"></div> <div class="my-5 mx-3">Classes 8</div> </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>   
<script>
    
    const labels = ['Genre'];

const data = {
  labels: ['Femme','Homme'],
  datasets: [{
  label: 'Gender',
  data: [60,40],
  backgroundColor: ['rgb(255, 99, 132)','rgb(54, 162, 235)'],
  width:5,
  hoverOffset: 4
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
