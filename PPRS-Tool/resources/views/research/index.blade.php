@extends('layouts.format')
<!DOCTYPE html>
<html>
    <head>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>

    <body>
        @section('content')
        <div>
            <table id="projectTable" width="100%">
                <tr>
                    <td class="page-header">Research Projects</td>
                </tr>
            </table>
            <!-- Tailwindcss table template used: https://tailwindui.com/components/application-ui/lists/tables -->
            <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mt-0">
                                <table class="min-w-full divide-y divide-gray-200 w-full">
                                    <thead>   
                                        <tr>
                                            <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                ID
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Study Name
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Student Lead
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Faculty Lead
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Keywords
                                            </th>
                                            <th scope="col" width="200" class="px-6 py-3 bg-gray-50">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- Loop through all study entries in the users database table -->
                                    @foreach ($entries as $entry)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">
                                            {{$entry->id}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">
                                            {{$entry->study_name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">
                                            {{$entry->student_name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">
                                            {{$entry->faculty_name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">
                                        @foreach ($entry->keywords as $keyword)
                                            {{ $loop->first ? '' : ',  ' }}
                                            <span class="nice">{{  $keyword }}</span>
                                        @endforeach
                                        </td>   
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('research.show', $entry->id) }}" button class="inline-block border-2 border-green-700 bg-green-300 text-black text-md hover:bg-green-600 py-1 px-3 rounded-xl">View</button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>