<?php require APPROOT .'/views/inc/header.php';?>
<div class="flex h-screen  justify-center  p-5" >
    <?php require APPROOT .'/views/inc/sidebar.php';?>
    <div class="relative overflow-x-auto   w-4/5">
        <div class="inline-flex gap-3 mb-5" id="tabRole">
            <button class="bg-blue-300 hover:bg-blue-500 text-gray-800 hover:text-white font-bold py-2 px-6 rounded"  value="student">
                Student
            </button>
            <button class="bg-blue-300 hover:bg-blue-500 text-gray-800 hover:text-white font-bold py-2 px-6 rounded"  value="teacher">
                Teacher
            </button>
            <button class="bg-blue-300 hover:bg-blue-500 text-gray-800 hover:text-white font-bold py-2 px-6 rounded"  value="parent">
                Parent
            </button>
            <button class="bg-blue-300 hover:bg-blue-500 text-gray-800 hover:text-white font-bold py-2 px-6 rounded"  value="admin">
                Admin
            </button>
        </div>
        <div id="tabStudent" class="">
            <table class="w-full text-sm text-left shadow-md text-gray-500 rounded-lg ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                        Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Class
                        </th>
                        <th scope="col" class="px-6 py-3">
                        birthday
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Email 
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Name Parent
                        </th>
                        <th scope="col" class="px-6 py-3">
                        <span class="sr-only"></span>
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['Students'] as $student) :?>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        <?php echo $student->student_first_name .' '.$student->student_last_name; ?>
                        </th>
                        <td class="px-6 py-4">
                        <?php echo $student->student_gender ; ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php echo $student->student_class  ; ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php echo $student->student_email; ?>
                        </td>
                        <td class="px-6 py-4 ">
                        <?php echo $student->parent_first_name .' '.$student->parent_last_name; ?>
                        </td>
                        <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 hover:underline mr-4">Edit</a>
                        <a href="#" class="font-medium text-blue-600 hover:underline ml-3">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- Table Teatcher -->
        <div id="tabTeacher" class="hidden">
            <table class="w-full text-sm text-left shadow-md text-gray-500 rounded-lg ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                        Name 
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Class
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Subject
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Phone 
                        </th>
                        <th scope="col" class="px-6 py-3">
                        <span class="sr-only"></span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['Teachers'] as $teacher) :?>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        <?php echo $teacher->teacher_first_name .' '.$teacher->teacher_last_name; ?>
                        </th>
                        <td class="px-6 py-4">
                        <?php echo $teacher->teacher_class; ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php echo $teacher->teacher_subject  ; ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php echo $teacher->teacher_phone; ?>
                        </td>
                        <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 hover:underline mr-4">Edit</a>
                        <a href="#" class="font-medium text-blue-600 hover:underline ml-3">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- Table Parent -->
        <div id="tabParent" class="hidden" >
            <table class="w-full text-sm text-left shadow-md text-gray-500 rounded-lg ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                        Name 
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Job
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Phone 
                        </th>
                        <th scope="col" class="px-6 py-3">
                        <span class="sr-only"></span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['Parents'] as $parent) :?>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        <?php echo $parent->parent_first_name .' '.$parent->parent_last_name; ?>
                        </th>
                        <td class="px-6 py-4">
                        <?php echo $parent->parent_job; ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php echo $parent->parent_address  ; ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php echo $parent->parent_phone; ?>
                        </td>
                        <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 hover:underline mr-4">Edit</a>
                        <a href="#" class="font-medium text-blue-600 hover:underline ml-3">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- Table Admin -->
        <div id="tabAdmin" class="hidden">
            <table class="w-full text-sm text-left shadow-md text-gray-500 rounded-lg ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                        Name 
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                        <span class="sr-only"></span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['Admins'] as $admin) :?>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        <?php echo $admin->admin_first_name .' '.$admin->admin_last_name; ?>
                        </th>
                        <td class="px-6 py-4">
                        <?php echo $admin->admin_role; ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php echo $admin->admin_email  ; ?>
                        </td>
                        <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 hover:underline mr-4">Edit</a>
                        <a href="#" class="font-medium text-blue-600 hover:underline ml-3">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require APPROOT .'/views/inc/footer.php';?>
