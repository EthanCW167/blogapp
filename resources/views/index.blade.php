<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta 
        name="viewport"
        content="width=device-width, initial-scale=1.0"/>
    <meta 
        http-equiv="X-UA-Compatible" 
        content="ie=edge"/>
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-yellow to-orange font-nunito"> 

<div>
  <div>
    <div>
      <nav class="justify-center">
        <div class="flex p-4 justify-between">
          <div>
            <h1 class="font-bold ">
              <a href="/blogapp/public/" class="text-4xl ">EW</a>
            </h1>
          </div>
          <div>
            <ul class="flex justify-evenly font-bold">
              <li class="px-4">
                <a href="{{ route('blog.index') }}" class="flex hover:text-gray">
                  <svg class="w-6" fill="#000000"  version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M93.238,220.968h172.463c4.466,0,8.084-3.619,8.084-8.084s-3.618-8.084-8.084-8.084H93.238
				c-4.466,0-8.084,3.619-8.084,8.084S88.772,220.968,93.238,220.968z"/>
			<path d="M93.238,177.853h97.01c4.466,0,8.084-3.619,8.084-8.084s-3.618-8.084-8.084-8.084h-97.01
				c-4.466,0-8.084,3.619-8.084,8.084S88.772,177.853,93.238,177.853z"/>
			<path d="M114.796,398.282h280.253c16.344,0,29.642-13.298,29.642-29.642v-91.082c0-5.206-1.371-10.333-3.968-14.822
				c-2.233-3.865-7.179-5.189-11.044-2.953c-3.866,2.233-5.188,7.179-2.953,11.044c1.176,2.034,1.797,4.362,1.797,6.732v91.082
				c0,7.43-6.044,13.474-13.474,13.474H114.796c-7.43,0-13.474-6.044-13.474-13.474v-91.082c0-7.43,6.044-13.474,13.474-13.474
				h150.905c4.466,0,8.084-3.619,8.084-8.084c0-4.466-3.618-8.084-8.084-8.084H114.796c-16.344,0-29.642,13.298-29.642,29.642
				v91.082C85.154,384.984,98.452,398.282,114.796,398.282z"/>
			<path d="M477.068,412.237c1.684-5.067,2.596-10.484,2.596-16.11V158.989c0-28.231-22.969-51.2-51.2-51.2h-45.81V29.642
				C382.653,13.298,369.355,0,353.01,0h-21.558c-16.344,0-29.642,13.298-29.642,29.642v78.147H83.537
				c-28.231,0-51.2,22.969-51.2,51.2v237.137c0,5.627,0.912,11.043,2.596,16.11C14.43,419.065,0,438.368,0,460.8
				C0,489.031,22.969,512,51.2,512h409.6c28.231,0,51.2-22.969,51.2-51.2C512,438.368,497.57,419.065,477.068,412.237z
				 M317.979,29.642c0-7.43,6.044-13.474,13.474-13.474h21.558c7.43,0,13.474,6.044,13.474,13.474v13.474h-48.505V29.642z
				 M366.484,59.284v188.632h-16.168V59.284H366.484z M317.979,59.284h16.168v188.632h-16.168V59.284z M317.979,264.084h48.505
				v20.66c0,0.579-0.192,1.153-0.539,1.617l-21.558,28.743c-0.704,0.938-1.652,1.078-2.156,1.078c-0.503,0-1.452-0.14-2.156-1.078
				l-21.557-28.741c-0.348-0.466-0.54-1.04-0.54-1.619V264.084z M48.505,158.989c0-19.317,15.715-35.032,35.032-35.032h218.274
				v37.726h-57.667c-4.466,0-8.084,3.619-8.084,8.084s3.618,8.084,8.084,8.084h57.667v106.892c0,4.053,1.339,8.071,3.773,11.318
				l21.558,28.743c3.596,4.796,9.096,7.545,15.091,7.545c5.994,0,11.495-2.75,15.091-7.545l21.559-28.745
				c2.433-3.244,3.772-7.263,3.772-11.316v-63.776h33.954c4.466,0,8.084-3.619,8.084-8.084s-3.619-8.084-8.084-8.084h-33.954
				v-26.947h33.954c4.466,0,8.084-3.619,8.084-8.084s-3.619-8.084-8.084-8.084h-33.954v-37.726h45.81
				c19.317,0,35.032,15.715,35.032,35.032v237.137c0,19.317-15.715,35.032-35.032,35.032H83.537
				c-19.317,0-35.032-15.715-35.032-35.032V158.989z M460.8,495.832H51.2c-19.317,0-35.032-15.715-35.032-35.032
				c0-16.257,11.071-30.113,26.426-33.963c9.349,12.434,24.222,20.49,40.943,20.49h344.926c16.72,0,31.594-8.056,40.943-20.49
				c15.355,3.85,26.426,17.707,26.426,33.963C495.832,480.117,480.117,495.832,460.8,495.832z"/>
			<path d="M235.52,463.495h-1.078c-4.466,0-8.084,3.618-8.084,8.084c0,4.466,3.618,8.084,8.084,8.084h1.078
				c4.466,0,8.084-3.618,8.084-8.084C243.604,467.113,239.986,463.495,235.52,463.495z"/>
			<path d="M433.853,463.495H272.168c-4.466,0-8.084,3.618-8.084,8.084c0,4.466,3.618,8.084,8.084,8.084h161.684
				c4.466,0,8.084-3.618,8.084-8.084C441.937,467.113,438.318,463.495,433.853,463.495z"/>
			<path d="M202.105,463.495h-1.078c-4.466,0-8.084,3.618-8.084,8.084c0,4.466,3.618,8.084,8.084,8.084h1.078
				c4.466,0,8.084-3.618,8.084-8.084C210.189,467.113,206.571,463.495,202.105,463.495z"/>
			<path d="M164.379,463.495H78.147c-4.466,0-8.084,3.618-8.084,8.084c0,4.466,3.618,8.084,8.084,8.084h86.232
				c4.466,0,8.084-3.618,8.084-8.084C172.463,467.113,168.845,463.495,164.379,463.495z"/>
		</g>
	</g>
</g>
</svg>
                    <span class="pl-2 hover:text-gray">Blog</span>
                </a>
              </li>
              <li class="px-4">
                <a href="https://www.linkedin.com/in/ethan-wilson-34609228a/" class="flex hover:text-gray">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                  <span class="pl-2">LinkedIn</span>
                </a>
              </li>
              <li class="px-4">
                <a href="https://github.com/EthanCW167" class="flex hover:text-gray">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                  <span class="pl-2">Portfolio</span>
                </a>
              </li>
              <li class="pl-20 pr-4">
                @if (Auth::user())
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-white hover:bg-black rounded-full py-2 px-3 text-md font-bold cursor-pointer tracking-wider border-black border-2 transition ease-out">Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>

                @else
                <a href="{{ route('login') }}" class="hover:text-white hover:bg-black rounded-full py-2 px-3 text-md font-bold cursor-pointer tracking-wider border-black border-2 transition ease-out">
                  <span class="font-bold">Login</span>
                </a>
                @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <main class="px-16 py-6">
      

      <header class=" pl-20 pt-20 pb-20 font-bold text-9xl flex justify-evenly">
        <div>
          <h1>Ethan</h1>
          <h1 class="pl-36">Wilson</h1>
        </div>
        <div>
          <img src="{{ asset('images/IMG_5614.JPG') }}" class="w-96 h-96 rounded-full object-cover" alt="Rounded avatar"><img>
        <div>
      </header>
    

      <div class="text-center">
        <div class="pt-6 font-bold text-xl">Hi, welcome to my website!</div>
        <div class="font-bold text-xl">This serves as a hub for all you need to know about me.</div>
      </div>
        <div class="mt-8 grid lg:grid-cols-3 gap-10">

          <a href="{{ route('blog.index') }}">
          <div class="card h-full hover:shadow-xl">
            <img src="{{ asset('images/BlogImage.jpg') }}" class="w-full h-full sm:h-48 object-cover">
            <div class="m-4">
              <span class="font-bold text-xl">Blog</span>
              <div class="pt-1">If there's anything interesting that I want to talk about this is the place you'll find it.</div>
            </div>
          </div>
          </a>

          <a href="https://www.linkedin.com/in/ethan-wilson-34609228a/">
          <div class="card h-full hover:shadow-xl">
            <img src="{{ asset('images/linkedinImage.png') }}" class="w-full h-full sm:h-48 object-scale-down">
            <div class="m-4">
              <span class="font-bold text-xl">LinkedIn</span>
              <div class="pt-1">Find out more about me, my profile will tell you about my education, skills and experience.</div>
            </div>
          </div>
          </a>

          <a href="https://github.com/EthanCW167">
          <div class="card h-full hover:shadow-xl">
            <img src="{{ asset('images/GitHub-logo.jpg') }}" class="w-full h-32 sm:h-48 object-scale-down">
            <div class="m-4">
              <span class="font-bold text-xl ">Portfolio</span>
              <div class="pt-1">Discover what i've coded, my portfolio includes both my academic and personal projects.</div>
            </div>
          </div>
        </a>
        </div>
        

      

    </main>
  </div>
</div>
</body>
</html>