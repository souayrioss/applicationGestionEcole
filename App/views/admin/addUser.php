<?php require APPROOT .'/views/inc/header.php';?>
<div class="flex h-screen  justify-center gap-20 p-5" >
        <?php require APPROOT .'/views/inc/sidebar.php';?>
    <div class="w-3/4 mt-32">
        <form method="POST" action="./Pages/addUsers"> 
            <div class="flex justify-evenly gap-10 mb-10 ">
                <div class="w-1/3">
                    <label for="first_name" class="block mb-2 text-lg font-semibold text-gray-900 px-2">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter your email" required>
                </div>
                <div class="w-1/3">
                    <label for="last_name" class="block mb-2 text-lg font-semibold text-gray-900 ">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter your first name" required>
                </div>
                <div class="w-1/3">
                    <label for="gender" class="block mb-2 text-lg font-semibold text-gray-900 ">Gender</label>
                    <select  id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-2" >
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-evenly gap-10 border-dashed border-2 p-5 border-blue-500 rounded-lg w-1/2 mb-16 mx-auto">
                <div class="">
                    <label for="admin" class="block mb-2 text-lg font-semibold text-gray-900">Admin</label>
                    <input type="radio" name="user"  value="admin">
                </div>
                <div class="">
                    <label for="teacher" class="block mb-2 text-lg font-semibold text-gray-900 ">Teacher</label>
                    <input type="radio" name="user"   value="teacher">
                </div>
                <div class="">
                    <label for="student" class="block mb-2 text-lg font-semibold text-gray-900 ">Student</label>
                    <input type="radio" name="user"  value="student">
                </div>
            </div>
            <!--          admin             -->
            <div class=" mb-10 hidden" id="divAdmin">
                <div class="flex justify-evenly gap-10 mb-5">
                    <div class="w-1/3">
                        <label for="admin_role " class="block mb-2 text-lg font-semibold text-gray-900 px-2">Role</label>
                        <input type="text" id="admin_role " name="admin_role " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter role Admin" required>
                    </div>
                    <div class="w-1/3">
                        <label for="admin_email " class="block mb-2 text-lg font-semibold text-gray-900 ">E-mail</label>
                        <input type="text" id="admin_email " name="admin_email " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter Email Admin" required>
                    </div>
                    <div class="w-1/3">
                        <label for="admin_password" class="block mb-2 text-lg font-semibold text-gray-900 ">Password</label>
                        <input type="password" id="admin_password" name="admin_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-2" placeholder="Enter password Admin" required>
                    </div>
                </div>
                <input type="submit" name="add_admin" value="Add Admin" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            </div>
            <!--          Teacher             -->
            <div class=" mb-10 hidden" id="divTeacher">
                <div class="flex justify-evenly gap-10 mb-5">
                    <div class="w-1/3">
                        <label for="teacher_subject" class="block mb-2 text-lg font-semibold text-gray-900 px-2">Subject</label>
                        <input type="text" id="teacher_subject" name="teacher_subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter subject teacher" required>
                    </div>
                    <div class="w-1/3">
                        <label for="teacher_phone " class="block mb-2 text-lg font-semibold text-gray-900 ">Phone</label>
                        <input type="text" id="teacher_phone " name="teacher_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter phone teacher" required>
                    </div>
                    <div class="w-1/3">
                        <label for="teacher_class " class="block mb-2 text-lg font-semibold text-gray-900 ">Class</label>
                        <select  id="teacher_class " name="teacher_class" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-2" >
                            <?php foreach($data['Class'] as $class) :?>
                                <option value="<?= $class->name_class ?>"> <?= $class->name_class ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                </div>
                <input type="submit" name="add_teacher" value="Add Teacher" class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            </div>
            <!--          Studnte             -->
            <div class=" mb-10  hidden" id="divStudent">
                <div class="flex justify-evenly gap-10 mb-5">
                    <div class="w-1/3">
                        <label for="student_email" class="block mb-2 text-lg font-semibold text-gray-900 px-2">Email</label>
                        <input type="text" id="student_email " name="student_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter subject teacher" required>
                    </div>
                    <div class="w-1/3">
                        <label for="student_birthday" class="block mb-2 text-lg font-semibold text-gray-900 ">Birthday</label>
                        <input type="text" id="student_birthday" name="student_birthday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter phone teacher" required>
                    </div>
                    <div class="w-1/3">
                        <label for="student_class " class="block mb-2 text-lg font-semibold text-gray-900 ">Class</label>
                        <select id="student_class " name="student_class" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-2" >
                        <?php foreach($data['Class'] as $class) :?>
                                <option value="<?= $class->name_class ?>"> <?= $class->name_class ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="flex justify-evenly gap-10 mb-2">
                    <div class="w-1/3">
                        <label for="parent_first_name" class="block mb-2 text-lg font-semibold text-gray-900 px-2">First Name Parent</label>
                        <input type="text" id="parent_first_name" name="parent_first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter subject teacher" required>
                    </div>
                    <div class="w-1/3">
                        <label for="parent_last_name" class="block mb-2 text-lg font-semibold text-gray-900 ">Last Name Parent</label>
                        <input type="text" id="parent_last_name" name="parent_last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter phone teacher" required>
                    </div>
                    <div class="w-1/3">
                        <label for="parent_gender" class="block mb-2 text-lg font-semibold text-gray-900 ">Gender Parent</label>
                        <select  id="parent_gender" name="parent_gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-2" required>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-evenly gap-10 mb-5">
                    <div class="w-1/3">
                        <label for="parent_job" class="block mb-2 text-lg font-semibold text-gray-900 px-2">Job Parent</label>
                        <input type="text" id="parent_job" name="parent_job" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter subject teacher" required>
                    </div>
                    <div class="w-1/3">
                        <label for="parent_address" class="block mb-2 text-lg font-semibold text-gray-900 ">Address Parent</label>
                        <input type="text" id="parent_address" name="parent_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter phone teacher" required>
                    </div>
                    <div class="w-1/3">
                        <label for="parent_phone" class="block mb-2 text-lg font-semibold text-gray-900 ">Phone Parent</label>
                        <input type="text" id="parent_phone" name="parent_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2" placeholder="Enter phone teacher" required>
                    </div>
                </div>
                <input type="submit" name="add_student" value="Add Student" class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            </div>
        </form>
    </div>
</div>

<?php require APPROOT .'/views/inc/footer.php';?>
