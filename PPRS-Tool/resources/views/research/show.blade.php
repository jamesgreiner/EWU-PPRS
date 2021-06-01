<!DOCTYPE html>
<html>
    <head>
    <!-- Styles -->
    <style>
        .navbar {
                width: 100%;
                background-color: #555;
                overflow: auto;
                font-family: 'Times New Roman', Times, serif;
            }
            
            .navbar a {
                float: left;
                text-align: center;
                padding: 12px;
                color: white;
                text-decoration: none;
                font-size: 17px;
            }
            
            .navbar a:hover {
                background-color: #b7142e;
            }
        
            @media screen and (max-width: 500px) {
                .navbar a {
                    float: none;
                    display: block;
                }   
            } 
    </style>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
    <div class="header">
            <img src="../images/ewu-banner.jpg" alt="EWU name and logo">
        </div>
        <div class="navbar">
            <a class="active" href="/"><i class="fa fa-fw fa-home"></i> Home</a>
            <a href="/project-info"><i class="fa fa-fw fa-book"></i> Information</a>
            <a href="/research"><i class="fa fa-fw fa-book"></i> Research Projects</a>
            <a href="/faq"><i class="fa far fa-comment"></i> FAQ</a>
            <a href="/contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
            <!-- If user logged in, display dashboard link
                 If user NOT logged in, display login link -->
            @auth
                <a href="{{ url('/dashboard') }}"><i class="fa fa-fw fa-user"></i> Dashboard</a>
            @else
                <a href="{{ route('login') }}"><i class="fa fa-fw fa-user"></i> Login</a>
            @endauth
        </div>

        <div class="page-header">Research Projects</div>
            <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
            Research Study
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Study ID: {{$entry->study_id}}
            </p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Study Name:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$entry->study_name}}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Researchers:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                Student Lead: {{$entry->student_name}}<br>
                Faculty Lead: {{$entry->faculty_name}}
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Contact Email:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                 {{$entry->student_contact}}<br>{{$entry->faculty_contact}}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Dates:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                Start: {{$entry->start_date}}<br>
                End: {{$entry->end_date}}
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Keywords:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                @foreach ($entry->keywords as $keyword)
                    {{ $loop->first ? '' : ',  ' }}
                    <span class="nice">{{  $keyword }}</span>
                @endforeach
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Seeding:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$entry->seed_name}} : {{$entry->seeding_date}}
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Planting:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$entry->plant_name}} : {{$entry->planting_date}}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Soil Amendment:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$entry->soil_amendment_type}} : {{$entry->soil_amendment_date}}<br>
                
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Herbicide Treatment
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{$entry->herbicide_treatment_type}} : {{$entry->herbicide_treatment_date}}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Study Description
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                 {{$entry->study_description}}
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Other:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                Soil: {{$entry->soil_other}}<br>
                Hydrological: {{$entry->hydrological_other}}<br>
                Mowings: {{$entry->mowings}}<br>
                management: {{$entry->management_other}}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                Attachments
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">
                        <!-- Heroicon name: solid/paper-clip -->
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                        </svg>
                        <span class="ml-2 flex-1 w-0 truncate">
                        resume_back_end_developer.pdf
                        </span>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Download
                        </a>
                    </div>
                    </li>
                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">
                        <!-- Heroicon name: solid/paper-clip -->
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                        </svg>
                        <span class="ml-2 flex-1 w-0 truncate">
                        coverletter_back_end_developer.pdf
                        </span>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Download
                        </a>
                    </div>
                    </li>
                </ul>
                </dd>
            </div>
            </dl>
        </div>
        </div>
    </body>
</html>