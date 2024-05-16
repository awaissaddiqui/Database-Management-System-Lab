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
        #submitForm{
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #0c0c0c;
        }
        .form-control{
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #0c0c0c;
        }
        /* make this button to center and also make his size large */
        .btn-primary{
            display: block;
            margin: auto;
            padding: 0.3rem 10rem;
            border: none;
            background-color: rgb(14, 133, 14);
            color: #ffffff;
            border-radius: 5px;
            cursor: pointer;
        }
        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .errorMessage{
            color: red;
            font-size: 20px;
            text-align: center;
        }
      
        
    </style>

<div class="py-12">
    <div class="p-6 bg-white" id="successMessage">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
               
            </div>
        @endif
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 hoverable-table overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <div class="grid grid-cols-3 gap-4">
                    <div class="p-6 bg-white">
                        <div class="overflow-x-auto">
                            <table class="min-w-full border-separate divide-y divide-gray-200 border-spacing-* border border-slate-700 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-800">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Department ID') }}</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Name') }}</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Department') }}</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Job Title') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($employees as $employee)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $employee->depID }}</td>
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

<div class="p-6 bg-white">
    
    <form id="submitForm" action="{{ route('submit_form') }}" method="POST">
        {{-- show model when successful submit it --}}
        <p class="errorMessage"></p>
        @csrf 
        <div class="mb-3">
            <label for="employee_name" class="form-label">Employee Name</label>
            <input type="text" class="form-control" id="employee_name" name="employee_name" required>
        </div>
        <div class="mb-3">
            <label for="department_name" class="form-label">Department Name</label>
            <input type="text" class="form-control" id="department_name" name="department_name" required>
        </div>
              <div class="mb-3">
            <label for="job_title" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="job_title" name="job_title" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<footer>
    <div class="p-6 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <p class="text-center text-gray-400 dark:text-gray-300">Awais Saddiqui </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</x-app-layout>


    

