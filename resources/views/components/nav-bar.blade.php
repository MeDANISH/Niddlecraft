<div class="nav-bar h-[5vw] flex justify-between items-center text-[1.5vw]  capitalize fixed-top">
    <div class="ml-[5vw]">
        <a href="#"> <img class="w-[12vw]" src="{{ asset('images/logo/logo.png') }}" alt="Niddlecraft"> </a>
    </div>
    <div class="flex justify-between w-[30vw]">
        <div><a href="#" class="hover:text-[#0074D6] font-medium"> home </a></div>
        <div><a href="#service" class="hover:text-[#0074D6]"> services </a></div>
        <div><a href="#our-tailor" class="hover:text-[#0074D6]"> our tailors </a></div>
        <div><a href="#contact" class="hover:text-[#0074D6]"> contact </a></div>
    </div>

@if ($loginStatus==='False')
    <div class="flex items-center mr-[5vw]">
        <div><a href="{{ asset('user-login.html') }}" target="_blank" class="text-[#0074D6] hover:text-[#0074D6]">login</a></div>
        <div>
            <button onclick="window.open('{{ asset('user-registration.html') }}','_blank')" class="bg-[#0074D6] text-white ml-[2vw] w-[8vw] h-[3.3vw] rounded-[.5vw]">Register</button>
        </div>
    </div>        
@else
    <div class="flex items-center mr-[5vw]">
        <abbr title="Profile"><a href="user-profile.html"><i class="fa-solid fa-user mr-[0.5vw]"></i>Megha Sen</a></abbr>
        <abbr title="Logout"><a href="index.html"><i class="fa-solid fa-right-from-bracket ml-[1vw]"></i></a></abbr>
    </div>        
@endif
</div>