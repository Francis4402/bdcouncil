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

        <div class="flex flex-col gap-10">
            <div class="flex w-full justify-end items-end">
                <label class="input input-bordered flex items-center gap-2">
                    <input type="text" class="grow" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" /></svg>
                </label>
            </div>
    
            <div class="overflow-x-auto">
                <table class="table">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>
                        No
                      </th>
                      <th>Name</th>
                      <th>Type of Trade Fair</th>
                      <th>City</th>
                      <th>Country</th>
                      <th>Date of Fair</th>
                      <th>Price</th>
                      <th>Booking Dead Line</th>
                      <th></th>
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
                          <div class="avatar">
                            <div class="mask rounded-full w-14 h-14">
                              <img src="{{ asset('assets/backgroundimage/logoround.png') }}" alt="i" />
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        International Apparel, Leather, Sourcing,
                        Trade Fair Including
                        Home Textile
                      </td>
                      <td>OSAKA</td>
                      <th>
                        JAPAN
                      </th>
                      <th>
                        April 09-11,2025
                      </th>
                      <th class="text-red-600">
                        $5450.00 09 SQM2
                      </th>
                      <th class="text-red-600">
                        EPB Subsidies 2025
                      </th>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                      <th>
                        2
                      </th>
                      <td>
                        <div class="flex items-center gap-3">
                          <div class="avatar">
                            <div class="mask rounded-full w-14 h-14">
                                <img src="{{ asset('assets/backgroundimage/logoround.png') }}" alt="i" />
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        International Apparel, Leather, Sourcing,
                        Trade Fair Including
                        Home Textile
                      </td>
                      <td>TOKYO</td>
                      <th>
                        JAPAN
                      </th>
                      <th>
                        April 09-07,2024 & November 27-29, 2024
                      </th>
                      <th class="text-red-600">
                        $4800.00
                        09 SQM2

                        $5450.00
                        09 SQM2
                      </th>
                      <th class="text-red-600">
                        Booking Open until
                        April 30, 2024
                      </th>
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
                          <div class="avatar">
                            <div class="mask rounded-full w-14 h-14">
                                <img src="{{ asset('assets/backgroundimage/logoround.png') }}" alt="i" />
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        International Apparel, Leather, Sourcing,
                        Trade Fair Including
                        Home Textile
                      </td>
                      <td>TOKYO</td>
                      <th>
                        JAPAN
                      </th>
                      <th>
                        June 12-14, 2024
                      </th>
                      <th class="text-red-600">
                        AUD $7684.00
                        09 SQM2
                      </th>
                      <th class="text-red-600">
                        Booking Open until
                        July 30, 2024
                      </th>
                    </tr>
                    <!-- row 4 -->
                    <tr>
                      <th>
                        4
                      </th>
                      <td>
                        <div class="flex items-center gap-3">
                          <div class="avatar">
                            <div class="mask rounded-full w-14 h-14">
                                <img src="{{ asset('assets/backgroundimage/logoround.png') }}" alt="i" />
                            </div>
                          </div>
            
                        </div>
                      </td>
                      <td>
                        International Apparel, Leather, Sourcing,
                        Trade Fair Including
                        Home Textile
                      </td>
                      <td>BARCELONA</td>
                      <th>
                        SPAIN
                      </th>
                      <th>
                        January 14-16, 2025
                        &
                        June 25-27, 2025
                      </th>
                      <th class="text-red-600">
                        €3760.00
                        12 SQM2
                      </th>
                      <th class="text-red-600">
                        Booking Open
                      </th>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>

@endsection