
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oregano&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" href="./css/style.css">
    <title>Page de statistiques</title>
</head>
<body class="p-3 h-screen" style="font-family: Oregano ;">

<div class="flex h-full " >
    <div class="xl:w-1/6 md:w-1/5 w-10   h-full bg-blue-500 rounded-lg  shadow-lg shadow-gray-300">
        <?php require_once "sidebar.html"; ?>
    </div>
    <div>
        <div class=" mx-44 my-24 grid gap-80 sm:grid-cols-2 lg:grid-cols-3 ">
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-300"><i class="fa-solid fa-graduation-cap"></i></div> <div class="my-5 mx-3">Etudiant 167</div> </div>
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-500"><i class="fa-solid fa-chalkboard-user"></i></div> <div class="my-5 mx-3">Prof 10</div> </div>
            <div class=" flex rounded-lg border-2 w-40 h-16 "><div class="border-r-2 p-4 bg-blue-700"><i class="fa-solid fa-landmark"></i></div> <div class="my-5 mx-3">Classes 8</div> </div>
        </div>
        <div class="flex justify-evenly  ">
            <div class="outer p-40">female 40%</div>
            <div class=" inner rounded-full">male 60%</div>
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
<script src="https://kit.fontawesome.com/2e18c067b3.js" crossorigin="anonymous"></script>
</body>
</html>