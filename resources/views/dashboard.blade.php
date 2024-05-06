<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        /* CSS for hover effect */
        .hoverable-table tbody tr:hover {
            background-color: rgb(51, 51, 51); 
            color: #ffffff; 
        }
        thead {
            height: 50px;
            font-weight: bolder
            font-size: 40px;
        }
        table{
            border-collapse: collapse;
            width: 100%;

        }
        table th , td{
            border: 1px solid #0c0c0c;
            padding: 8px;
            text-align: left;
        }
       
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 hoverable-table overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    
                    <div class="grid grid-cols-3 gap-4">
                        
                        <div class="p-6 bg-white">
                           
                            <div class="overflow-x-auto">
                                <table class="min-w-full border-separate divide-y  divide-gray-200 border-spacing-* border border-slate-700 dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-gray-800">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('ID') }}</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Name') }}</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Department') }}</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Job Detail') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700">
                                        @foreach ($employees as $employee)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->id }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->employee_name }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->department_name }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->jobDetail }}</td>
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
    </div>
</x-app-layout>
