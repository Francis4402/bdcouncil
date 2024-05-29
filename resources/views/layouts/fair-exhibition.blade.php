<!DOCTYPE html>
<html>
    <head>
        <title>Fair Exhibition</title>
    </head>
</html>

@extends('welcome')

@section('mainpage')
<div class="flex justify-center mt-20 mb-10">
    <div class="container max-w-6xl lg:px-0 px-5">

        <div class="flex flex-col gap-10 relative">
            <div class="flex w-full justify-end items-center gap-5">
                <label class="input input-bordered flex items-center gap-2 sm:w-52 w-full">
                    <input type="text" class="grow" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" /></svg>
                </label>
                
                <button class="p-[0.7rem] btn btn-primary tablemenubtn">
                  <svg data-slot="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="size-6 text-white">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 3.75A.75.75 0 0 1 2.75 3h11.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 3.75ZM2 7.5a.75.75 0 0 1 .75-.75h7.508a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 7.5ZM14 7a.75.75 0 0 1 .75.75v6.59l1.95-2.1a.75.75 0 1 1 1.1 1.02l-3.25 3.5a.75.75 0 0 1-1.1 0l-3.25-3.5a.75.75 0 1 1 1.1-1.02l1.95 2.1V7.75A.75.75 0 0 1 14 7ZM2 11.25a.75.75 0 0 1 .75-.75h4.562a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z"></path>
                  </svg>
                </button>

                <div class="hidden ease-in-out smallmenu w-fit h-fit right-5 top-14 bg-[#6e5bde] rounded-lg absolute z-10">
                  <ul class="text-center font-bold divide-y-2 divide-white text-white">
                    <li class="px-5 py-2 hover:bg-blue-400 duration-200 cursor-pointer">ADD</li>
                    <li class="px-5 py-2 hover:bg-blue-400 duration-200 cursor-pointer">GROUP ASSIGN</li>
                    <li class="px-5 py-2 hover:bg-blue-400 duration-200 cursor-pointer">TRAINING APPROVAL</li>
                    <li class="px-5 py-2 hover:bg-blue-400 duration-200 cursor-pointer">TRASH</li>
                  </ul>
                </div>
            </div>
            
            
    
            <div class="overflow-x-auto">
                <table class="table table-sortable">
                  <!-- head -->
                  <thead class="bg-[#6e5bde] text-base text-white">
                    <tr>
                      <th>
                        No
                      </th>
                      <th>
                        Name  
                      </th>

                      <th>
                        Type of Trade Fair
                      </th>

                      <th>
                        City
                      </th>

                      <th>
                        Country
                      </th>

                      <th>
                        Date of Fair
                      </th>

                      <th>
                        Price
                      </th>

                      <th>
                        Booking Dead Line
                      </th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <!-- row 1 -->
                    <tr>
                      <th>
                        <label>
                          1
                        </label>
                      </th>
                      <td>
                        <div class="flex items-center gap-3">
                          <div class="flex flex-col items-center text-center">
                            <div class="w-24 h-24 flex items-center">
                              <img src="https://buyerscouncil.org/wp-content/uploads/2024/05/logo.BeCKDaXV-150x150.png" alt="i" />
                            </div>
                            <div class="mt-2 font-bold text-lg">
                              AFF <br>
                              JAPAN
                            </div>
                          </div>
                          
                        </div>
                      </td>
                      <td>
                        International Apparel, Leather, Sourcing,
                        Trade Fair Including
                        Home Textile
                      </td>
                      <td class="font-bold">OSAKA</td>
                      <td class="font-bold">
                        JAPAN
                      </td>
                      <td class="font-bold">
                        April 09-11,2025
                      </td>
                      <td class="text-red-600 font-bold">
                        $5450.00 09 SQM2
                      </td>
                      <td class="text-red-600 font-bold">
                        EPB Subsidies 2025
                      </td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                      <th>
                        2
                      </th>
                      <td>
                        <div class="flex items-center gap-3">
                          <div class="flex flex-col items-center text-center">
                            <div class="w-24 h-24 flex items-center">
                              <img src="https://buyerscouncil.org/wp-content/uploads/2024/05/logo.BeCKDaXV-150x150.png" alt="i" />
                            </div>
                            <div class="mt-2 font-bold text-lg">
                              AFF <br>
                              JAPAN
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        International Apparel, Leather, Sourcing,
                        Trade Fair Including
                        Home Textile
                      </td>
                      <td class="font-bold">TOKYO</td>
                      <td class="font-bold">
                        JAPAN
                      </td>
                      <td class="font-bold">
                        April 09-07,2024 & November 27-29, 2024
                      </td>
                      <td class="text-red-600 font-bold">
                        $4800.00
                        09 SQM2
                    
                        $5450.00
                        09 SQM2
                      </td>
                      <td class="text-red-600 font-bold">
                        Booking Open until
                        April 30, 2024
                      </td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                      <th>
                        <label>
                          3
                        </label>
                      </th>
                      <td>
                        <div class="flex items-center gap-3">
                          <div class="flex flex-col items-center text-center">
                            <div class="w-24 h-24 flex items-center">
                              <img src="https://buyerscouncil.org/wp-content/uploads/2024/05/BARCELONA-LOGO-300x91.jpg" alt="i" />
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        International Apparel, Leather, Sourcing,
                        Trade Fair Including
                        Home Textile
                      </td>
                      <td class="font-bold">SYDNEY</td>
                      <td class="font-bold">
                        AUSTRALIA
                      </td>
                      <td class="font-bold">
                        June 12-14, 2024
                      </td>
                      <td class="text-red-600 font-bold">
                        AUD $7684.00
                        09 SQM2
                      </td>
                      <td class="text-red-600 font-bold">
                        Booking Open until
                        July 30, 2024
                      </td>
                    </tr>
                    <!-- row 4 -->
                    <tr>
                      <th>
                        4
                      </th>
                      <td>
                        <div class="flex items-center gap-3">
                          <div class="flex flex-col items-center text-center">
                            <div class="w-24 h-24 flex items-center">
                              <img src="https://buyerscouncil.org/wp-content/uploads/2024/05/global-sydney-2023-150x150.png" alt="i" />
                            </div>
                          </div>
                    
                        </div>
                      </td>
                      <td>
                        International Apparel, Leather, Sourcing,
                        Trade Fair Including
                        Home Textile
                      </td>
                      <td class="font-bold">BARCELONA</td>
                      <td class="font-bold">
                        SPAIN
                      </td>
                      <td class="font-bold">
                        January 14-16, 2025
                        &
                        June 25-27, 2025
                      </td>
                      <td class="text-red-600 font-bold">
                        €3760.00
                        12 SQM2
                      </td>
                      <td class="text-red-600 font-bold"">
                        Booking Open
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        

        <div class="flex items-center justify-end gap-5 mt-10">
          <button class="flex items-center gap-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
            </svg>
            <p>Prev</p>    
          </button>
          
          <button class="w-10 h-10 justify-center items-center flex rounded-full bg-gray-800 text-white cursor-pointer">1</button>

          <button class="flex items-center gap-2 cursor-pointer">
            <p>Next</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>    
          </button>
        </div>
    </div>
</div>

<script src="{{ mix('js/tablesort.js') }}"></script>
<script src="{{ mix('js/tablemenubtn.js') }}"></script>
@endsection