@extends('layouts.adminDashboard.app')

@section('head')
<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" />
<link rel="stylesheet" href="{{ mix('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/compiled-tailwind.min.css') }}" />
@endsection

@section('title')
Users | ADMIN S POST
@endsection

@section('navigation')
@include('layouts.adminDashboard.navigation')
@endsection

@section('header')
@include('layouts.adminDashboard.header')
@endsection

@section('card')
{{-- @include('layouts.adminDashboard.card') --}}
@endsection

@section('main')

<div class="flex flex-wrap mt-4">
	<div class="w-full xl:w-12/12 mb-12 xl:mb-0 px-4">
		<div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
			<div class="rounded-t mb-0 px-4 py-3 border-0">
				<div class="flex flex-wrap items-center">
					<div class="relative w-full px-4 max-w-full flex-grow flex-1">
						<h3 class="font-semibold text-base text-blueGray-700">
							Users List
						</h3>
					</div>
					<div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
						<button
							class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
							type="button" style="transition:all .15s ease">
							See all
						</button>
					</div>
				</div>
			</div>
			<div class="block w-full overflow-x-auto">
				<!-- Projects table -->
				<table class="items-center w-full bg-transparent border-collapse">
					<thead>
						<tr>
							<th
								class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
								No.
							</th>
							<th
								class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
								Name
							</th>
							<th
								class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
								Username
							</th>
							<th
								class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
								Email
							</th>
							<th
								class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
								Post count
							</th>
							<th colspan="2"
								class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
								Action
							</th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 1; $i < 8; $i++) <tr>
							<th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
								{{ $i }}
							</th>
							<th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
								/argon/
							</th>
							<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
								4,569
							</td>
							<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
								340
							</td>
							<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
								<i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
								46,53%
							</td>

							<td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
								<button
									class="bg-blue-200 text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
									type="button" style="transition: all 0.15s ease 0s;">
									{{-- <i class="fas fa-arrow-alt-circle-down"></i> --}} More
								</button>
							</td>
							@endfor


					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

@include('layouts.adminDashboard.footer')
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" charset="utf-8"></script>
<script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
<script type="text/javascript">
	/* Sidebar - Side navigation menu on mobile/responsive mode */
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("bg-white");
      document.getElementById(collapseID).classList.toggle("m-2");
      document.getElementById(collapseID).classList.toggle("py-3");
      document.getElementById(collapseID).classList.toggle("px-6");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
      let element = event.target;
      while (element.nodeName !== "A") {
        element = element.parentNode;
      }
      var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-end"
      });
      document.getElementById(dropdownID).classList.toggle("hidden");
      document.getElementById(dropdownID).classList.toggle("block");
    }


    (function() {
      /* Add current date to the footer */
      document.getElementById("javascript-date").innerHTML = new Date().getFullYear();
      /* Chart initialisations */
      /* Line Chart */
      var config = {
        type: "line",
        data: {
          labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July"
          ],
          datasets: [
            {
              label: new Date().getFullYear(),
              backgroundColor: "#4c51bf",
              borderColor: "#4c51bf",
              data: [65, 78, 66, 44, 56, 67, 75],
              fill: false
            },
            {
              label: new Date().getFullYear() - 1,
              fill: false,
              backgroundColor: "#ed64a6",
              borderColor: "#ed64a6",
              data: [40, 68, 86, 74, 56, 60, 87]
            }
          ]
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          title: {
            display: false,
            text: "Sales Charts",
            fontColor: "white"
          },
          legend: {
            labels: {
              fontColor: "white"
            },
            align: "end",
            position: "bottom"
          },
          tooltips: {
            mode: "index",
            intersect: false
          },
          hover: {
            mode: "nearest",
            intersect: true
          },
          scales: {
            xAxes: [
              {
                ticks: {
                  fontColor: "rgba(255,255,255,.7)"
                },
                display: true,
                scaleLabel: {
                  display: false,
                  labelString: "Month",
                  fontColor: "white"
                },
                gridLines: {
                  display: false,
                  borderDash: [2],
                  borderDashOffset: [2],
                  color: "rgba(33, 37, 41, 0.3)",
                  zeroLineColor: "rgba(0, 0, 0, 0)",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2]
                }
              }
            ],
            yAxes: [
              {
                ticks: {
                  fontColor: "rgba(255,255,255,.7)"
                },
                display: true,
                scaleLabel: {
                  display: false,
                  labelString: "Value",
                  fontColor: "white"
                },
                gridLines: {
                  borderDash: [3],
                  borderDashOffset: [3],
                  drawBorder: false,
                  color: "rgba(255, 255, 255, 0.15)",
                  zeroLineColor: "rgba(33, 37, 41, 0)",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2]
                }
              }
            ]
          }
        }
      };
      var ctx = document.getElementById("line-chart").getContext("2d");
      window.myLine = new Chart(ctx, config);

      /* Bar Chart */
      config = {
        type: "bar",
        data: {
          labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July"
          ],
          datasets: [
            {
              label: new Date().getFullYear(),
              backgroundColor: "#ed64a6",
              borderColor: "#ed64a6",
              data: [30, 78, 56, 34, 100, 45, 13],
              fill: false,
              barThickness: 8
            },
            {
              label: new Date().getFullYear() - 1,
              fill: false,
              backgroundColor: "#4c51bf",
              borderColor: "#4c51bf",
              data: [27, 68, 86, 74, 10, 4, 87],
              barThickness: 8
            }
          ]
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          title: {
            display: false,
            text: "Orders Chart"
          },
          tooltips: {
            mode: "index",
            intersect: false
          },
          hover: {
            mode: "nearest",
            intersect: true
          },
          legend: {
            labels: {
              fontColor: "rgba(0,0,0,.4)"
            },
            align: "end",
            position: "bottom"
          },
          scales: {
            xAxes: [
              {
                display: false,
                scaleLabel: {
                  display: true,
                  labelString: "Month"
                },
                gridLines: {
                  borderDash: [2],
                  borderDashOffset: [2],
                  color: "rgba(33, 37, 41, 0.3)",
                  zeroLineColor: "rgba(33, 37, 41, 0.3)",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2]
                }
              }
            ],
            yAxes: [
              {
                display: true,
                scaleLabel: {
                  display: false,
                  labelString: "Value"
                },
                gridLines: {
                  borderDash: [2],
                  drawBorder: false,
                  borderDashOffset: [2],
                  color: "rgba(33, 37, 41, 0.2)",
                  zeroLineColor: "rgba(33, 37, 41, 0.15)",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2]
                }
              }
            ]
          }
        }
      };
      ctx = document.getElementById("bar-chart").getContext("2d");
      window.myBar = new Chart(ctx, config);
    })();
</script>
@endsection