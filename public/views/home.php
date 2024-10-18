<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../public/lib/css/index.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>HOME PAGE</title>
</head>
<body class="bg-gray-100 p-10" onload="loadToDoList()">
  <!-- <img src="./todo.png" alt="bruh" style="height: 100px; width: 100px;"> -->

<div class="w-1/2 mx-auto mt-10 p-6  shadow rounded-lg" >
<!-- <div class="flex justify-between items-center mb-6">
    <h1 class="text-xl font-semibold text-gray-800">Todos</h1>
    <button id="openDialog" class="px-4 py-2 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-500">
      Create new job
    </button>
  </div> -->
  <!-- <div class="space-y-4">
     <div class="grid grid-cols-5 gap-4">
      <div class="w-full h-64 relative rounded-lg bg-gray-400">
        <div class="absolute inset-x-0 top-0 justify-between flex mx-4 mt-2">
            <div>
                Date
            </div>
            <div>
                <button class="mr-2">Edit</button>
                <button>Delete</button>
            </div>
        </div>
        <div class="mt-10 px-4">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste illo 
            dolore nihil sed perspiciatis enim odit repellat rerum tenetur nostrum?
        </div>
      </div>
      <div class="w-full h-64 rounded-lg bg-gray-400"></div>
      <div class="w-full h-64 rounded-lg bg-gray-400"></div>
      <div class="w-full h-64 rounded-lg bg-gray-400"></div>
      <div class="w-full h-64 rounded-lg bg-gray-400"></div>
      <div class="w-full h-64 rounded-lg bg-gray-400"></div>
      <div class="w-full h-64 rounded-lg bg-gray-400"></div>
     </div> -->
    <!-- <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg shadow-sm">
      <div>
        <h2 class="text-lg font-medium text-indigo-600 hover:underline cursor-pointer">Back End Developer</h2>
        <p class="text-sm text-gray-500">Engineering</p>
      </div>
      <div class="flex items-center space-x-4">
        <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded-full">Full-time</span>
        <span class="text-sm text-gray-500 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 2a6 6 0 00-6 6c0 6.25 6 10 6 10s6-3.75 6-10a6 6 0 00-6-6zM5 8a5 5 0 1110 0c0 4.2-4 7.3-5 8.25C9 15.3 5 12.2 5 8z" clip-rule="evenodd" />
            <path d="M10 11a2 2 0 110-4 2 2 0 010 4z" />
          </svg>
          Remote
        </span>
      </div>
    </div>

    <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg shadow-sm">
      <div>
        <h2 class="text-lg font-medium text-indigo-600 hover:underline cursor-pointer">Front End Developer</h2>
        <p class="text-sm text-gray-500">Engineering</p>
      </div>
      <div class="flex items-center space-x-4">
        <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded-full">Full-time</span>
        <span class="text-sm text-gray-500 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 2a6 6 0 00-6 6c0 6.25 6 10 6 10s6-3.75 6-10a6 6 0 00-6-6zM5 8a5 5 0 1110 0c0 4.2-4 7.3-5 8.25C9 15.3 5 12.2 5 8z" clip-rule="evenodd" />
            <path d="M10 11a2 2 0 110-4 2 2 0 010 4z" />
          </svg>
          Remote
        </span>
      </div>
    </div>

    <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg shadow-sm">
      <div>
        <h2 class="text-lg font-medium text-indigo-600 hover:underline cursor-pointer">User Interface Designer</h2>
        <p class="text-sm text-gray-500">Design</p>
      </div>
      <div class="flex items-center space-x-4">
        <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded-full">Full-time</span>
        <span class="text-sm text-gray-500 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 2a6 6 0 00-6 6c0 6.25 6 10 6 10s6-3.75 6-10a6 6 0 00-6-6zM5 8a5 5 0 1110 0c0 4.2-4 7.3-5 8.25C9 15.3 5 12.2 5 8z" clip-rule="evenodd" />
            <path d="M10 11a2 2 0 110-4 2 2 0 010 4z" />
          </svg>
          Remote
        </span>
      </div> -->
    <!-- </div> -->
  <!-- </div>
</div> -->


<div id="dialog" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
    <!-- Dialog Box -->
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/2">
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center space-x-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 11-12.728 0m8.485 6.364l-2.121 2.121m0 0l-2.121-2.121M12 11.5v-4" />
          </svg>
          <h2 class="text-lg font-semibold text-gray-800">Add New Todo</h2>
        </div>
        <button id="closeDialog" class="text-gray-500 hover:text-gray-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      


      <div class="mb-4">
            <label for="todo" class="block text-sm font-medium text-gray-700">Todo details</label>
            <textarea type="textarea" id="todo" name="todo" placeholder="Enter your email or username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            <small id="todoError" class="text-red-500 text-xs hidden">Please enter your email or username.</small>  
        </div>

        <div class="mb-4">
            <label for="dtd" class="block text-sm font-medium text-gray-700">Date</label>
            <input type="date" id="dtd" name="dtd" placeholder="Enter your email or username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <small id="dateError" class="text-red-500 text-xs hidden">Please enter your email or username.</small>  
        </div>


      <p class="text-gray-600 mb-6">
        Are you sure you want to deactivate your account? All of your data will be permanently removed from our servers forever. This action cannot be undone.
      </p>

      <div class="flex justify-end space-x-3">
        <button id="closeDialogBtn" class="px-4 py-2 bg-white border rounded-lg text-gray-700 hover:bg-gray-100">
          Cancel
        </button>
        <input value="ADD TODO" class="px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-500" onclick="addToDo()">
      </div>
    </div>
  </div>



<div class="w-full mx-auto bg-white shadow-md rounded-lg p-6">
    
    <div class="flex justify-center mb-6">
   
      <img src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.3c5441fc7a190fb1800d4a5c7f07ba4b1345a9c8.svg" alt="Sneat Logo" class="w-10 h-10" />
    </div>

        <div class="flex justify-between items-center border-t border-b py-4">
            <div>
                <span class="text-gray-700">Remaining:</span>
                <span class="text-red-500 font-semibold" id="remainingCount">4</span>
            </div>
            <div>
                <span class="text-gray-700">Completed:</span>
                <span class="text-green-500 font-semibold" id="completedCount">0</span>
            </div>
            <button id="openDialog" class="px-4  py-2 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-500">
                Create Todo
            </button>
        </div>

        <div class="mt-4">
            <ul class="space-y-2" id="todos">
                
            </ul>
        </div>
    </div>
    <img src="https://scontent.fceb6-1.fna.fbcdn.net/v/t1.15752-9/462546851_8498906033534928_9174153504876322559_n.png?_nc_cat=105&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGombhM9bta44tfHZ7ci_QZlMWtTxlZBP-Uxa1PGVkE_74kmc_9hT1Rz8kH2mrxcpYhVAlp1SGH79r4uVfT_Z2J&_nc_ohc=M7K-7j_CygoQ7kNvgFzXroZ&_nc_ht=scontent.fceb6-1.fna&_nc_gid=AJYZ54nomCfgnvSsuqkwEYd&oh=03_Q7cD1QGnabuzeoMfV0qV1wxC9Q6o70b7MRdAkCAy-73mEoxX1g&oe=6739F918" alt="">
   
    <input type="button" value="LOGOUT" onclick="logout()">    
    <a href="/atd"><input type="button" value="ADD TODO"></a>
    hi
    <h1 style="margin-bottom:15px;">WELCOME, <?php echo ucwords($_SESSION['fname']).' '.ucwords($_SESSION['lname']);?></h1>    

    <div id="todos"></div> 
</body>
<!-- <body onload="loadToDoList()">
    
</body> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./public/lib/js/index.js"></script>
<script>
    const openDialog = document.getElementById('openDialog');
    const closeDialog = document.getElementById('closeDialog');
    const closeDialogBtn = document.getElementById('closeDialogBtn');
    const dialog = document.getElementById('dialog');

    openDialog.addEventListener('click', () => {
      dialog.classList.remove('hidden');
    });

    closeDialog.addEventListener('click', () => {
      dialog.classList.add('hidden');
    });

    closeDialogBtn.addEventListener('click', () => {
      dialog.classList.add('hidden');
    });
  </script>
</html>