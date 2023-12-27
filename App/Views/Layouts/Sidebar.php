<aside class="bg-[#1d3557] h-[100vh] w-[20%]">
    <ul class="p-5 mt-7">
        <img class="h-6" src="/Public/Assets/Img/Insurance _.png" alt="" > 

        <li class="my-2 pt-4" >
            <a href="/Insurers" class="text-lg font-medium w-[full] rounded h-[40px] text-white flex items-center p-5 py-6 group bg-[#778da9] hover:bg-indigo-200 hover:bg-opacity-30 bg-opacity-20 <?php if (checkUrl('/Insurers')) {echo "bg-indigo-200  bg-opacity-30";} ?> ">
                <img class="h-6 sm:w-6 w-full" src="/App/Views/Layouts/Img/insurance.png" alt="" > 
                <span class="hidden sm:inline-block pl-4">Insurer</span>
            </a>
        </li>

        <li class="my-2" >
            <a href="/Clients" class="text-lg font-medium w-[full] rounded h-[40px] text-white flex items-center p-5 group bg-[#778da9] hover:bg-indigo-200 hover:bg-opacity-30 bg-opacity-20 <?php MakeItActive('/Clients') ?>">
                <img class="h-6 sm:w-6 w-full" src="/App/Views/Layouts/Img/insurance.png" alt="" > 
                <span class="hidden sm:inline-block pl-4">Client's</span>
            </a>
        </li>

        <li class="my-2" >
            <a href="/Articles" class="text-lg font-medium w-[full] rounded h-[40px] text-white flex items-center p-5 group bg-[#778da9] hover:bg-indigo-200 hover:bg-opacity-30 bg-opacity-20 <?php MakeItActive('/Articles') ?>">
                <img class="h-6 sm:w-6 w-full" src="/Public/Assets/Img/file.png" alt="" > 
                <span class="hidden sm:inline-block pl-4">Articles</span>
            </a>
        </li>

        <li class="my-2" >
            <a href="/Claims" class="text-lg font-medium w-[full] rounded h-[40px] text-white flex items-center p-5 group bg-[#778da9] hover:bg-indigo-200 hover:bg-opacity-30 bg-opacity-20 <?php MakeItActive('/Claims') ?>">
                <img class="h-6 sm:w-6 w-full" src="/Public/Assets/Img/newspaper.png" alt="" > 
                <span class="hidden sm:inline-block pl-4">Claim</span>
            </a>
        </li>

        
        <li class="my-2" >
            <a href="/Refunds" class="text-lg font-medium w-[full] rounded h-[40px] text-white flex items-center p-5 group bg-[#778da9] hover:bg-indigo-200 hover:bg-opacity-30 bg-opacity-20 <?php MakeItActive('/Refunds') ?>">
                <img class="h-6 sm:w-6 w-full" src="/Public/Assets/Img/refund.png" alt="" > 
                <span class="hidden sm:inline-block pl-4">Refunds</span>
            </a>
        </li>

        <li class="my-2" >
            <a href="?logOut" class="bg-[#ef233c] h-10 w-[50%] sm:w-full flex items-center rounded p-5 text-[#fff] hover:bg-[#ff8fab] font-bold m-auto mt-10">
                <img class="h-6 sm:w-6 w-full" src="/Public/Assets/Img/shutdown.png" alt="" > 
                <span class="hidden sm:inline-block pl-4">LOG OUT</span>
            </a>
        </li>
    </ul>
</aside>
