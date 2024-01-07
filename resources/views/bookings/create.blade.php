<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ingatlanok kezelése') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h2 class="font-semibold text-3xl">Foglalás rögzítése </h2>
                    <form action="/bookings/store" method="post">
                        {{ csrf_field() }}
                        <h3 class="bold font-bold text-xl my-4"> 1. Válassz apartmant</h3>
                            <div class="flex mb-6 mt-4">
                                <div class="flex-1 items-center flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16">
                                        <path d="M19.006 3.705a.75.75 0 1 0-.512-1.41L6 6.838V3a.75.75 0 0 0-.75-.75h-1.5A.75.75 0 0 0 3 3v4.93l-1.006.365a.75.75 0 0 0 .512 1.41l16.5-6Z" />
                                        <path fill-rule="evenodd" d="M3.019 11.114 18 5.667v3.421l4.006 1.457a.75.75 0 1 1-.512 1.41l-.494-.18v8.475h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3v-9.129l.019-.007ZM18 20.25v-9.566l1.5.546v9.02H18Zm-9-6a.75.75 0 0 0-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75H9Z" clip-rule="evenodd" />
                                    </svg>
                                    <input id="prop1" type="radio" name="prop" value="1">
                                </div>
                                <div class="flex-1 items-center flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16">
                                        <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                        <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                                    </svg>
                                    <input id="prop2" type="radio" name="prop" value="2">
                                </div>
                            </div>

                        <h3 class="bold font-bold text-xl my-4">2. Add meg az adataid</h3>
                        <div class="grid items-end gap-6 mb-6 md:grid-cols-3">
                            <div class="relative">
                                <input required type="text" id="small_filled" class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="" name="firstname" />
                                <label for="small_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-3 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto required">Keresztnév</label>
                            </div>
                            <div class="relative">
                                <input required type="text" id="small_filled" class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="" name="lastname" />
                                <label for="small_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-3 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto required">Vezetéknév</label>
                            </div>

                        </div>


                        <div class="grid items-end gap-6 mb-6 md:grid-cols-3">
                            <div class="relative">
                                <input required type="text" id="small_filled" class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="" name="email" />
                                <label for="small_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-3 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto required">Email</label>
                            </div>
                            <div class="relative">
                                <input required type="tel" id="small_filled" class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="" name="phone" />
                                <label for="small_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-3 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto required">Telefon</label>
                            </div>
                        </div>


                        <div class="grid items-end gap-6 mb-6 md:grid-cols-2">
                            <div class="relative">
                                <h3 class="bold font-bold text-xl my-4">3. Válaszd ki a bérleti időszakot</h3>
                                <div id='calendar'></div>
                                <h2>Kivalasztott datumok:</h2>
                                <div id="foglalas"></div>
                                <input id="fromDate" value="" type="hidden" name="from_date">
                                <input id="untilDate" value="" type="hidden" name="until_date">
                            </div>
                        </div>

                        <div class="grid items-end gap-6 mb-6 md:grid-cols-3">
                            <div class="relative">
                                <a href="{{ route('bookings') }}" class="">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded relative pl-[35px]" type="button">Vissza a listahoz
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="top-[8px] left-[12px] w-[20px] absolute w-6 h-6">
                                            <path fill-rule="evenodd" d="M2.625 6.75a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875 0A.75.75 0 0 1 8.25 6h12a.75.75 0 0 1 0 1.5h-12a.75.75 0 0 1-.75-.75ZM2.625 12a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0ZM7.5 12a.75.75 0 0 1 .75-.75h12a.75.75 0 0 1 0 1.5h-12A.75.75 0 0 1 7.5 12Zm-4.875 5.25a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875 0a.75.75 0 0 1 .75-.75h12a.75.75 0 0 1 0 1.5h-12a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                                        </svg>

                                    </button>
                                </a>

                                <button type="submit" class="float-right btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded relative pl-[35px]">
                                    Új foglalás rögzítése
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 absolute top-[8px] left-[6px]">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        /*------------------------------------------
        --------------------------------------------
        Get Site URL
        --------------------------------------------
        --------------------------------------------*/
        var SITEURL = "{{ url('/') }}";

        /*------------------------------------------
        --------------------------------------------
        CSRF Token Setup
        --------------------------------------------
        --------------------------------------------*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /*------------------------------------------
        --------------------------------------------
        FullCalender JS Code
        --------------------------------------------
        --------------------------------------------*/
        var calendar = $('#calendar').fullCalendar({
            eventSources: [
                {
                    url: '/bookings/data',
                    color: 'yellow',   // an option!
                    textColor: 'black' // an option!
                }
            ],
            displayEventTime: false,
            editable: true,
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {

                if(start.isBefore(moment())) {
                    calendar.fullCalendar('unselect');
                    alert('Ez a datum mar elmult.');
                } else {
                        calendar.fullCalendar('renderEvent',
                            {
                                id: 1,
                                title: "Lefoglalva!",
                                start: start,
                                end: end,
                                allDay: allDay
                            },true);
                        calendar.fullCalendar('unselect');

                }

                const date_ = moment(start._i).format("YYYY-MM-DD");
                const date_v = moment(end._i).format("YYYY-MM-DD");

                $('#foglalas').append(date_ + ' - ' + date_v);
                $("#fromDate").val(date_);
                $("#untilDate").val(date_v);
            },
            eventDrop: function (event, delta) {
                calendar.fullCalendar('removeEvents', event.id);
            },
            dateClick: function(info) {
                alert('Clicked on: ' + info.dateStr);
                alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
                alert('Current view: ' + info.view.type);
                // change the day's background color just for fun
                info.dayEl.style.backgroundColor = 'red';
            },
            eventClick: function (event) {
                var deleteMsg = confirm("Torolni kivanja a kivalasztott datumokat?");
                if (deleteMsg) {
                    calendar.fullCalendar('removeEvents', event.id);
                    $('#foglalas').html('');
                    $("#fromDate").val('');
                    $("#untilDate").val('');
                }
            }

        });


        /*------------------------------------------
        --------------------------------------------
        Toastr Success Code
        --------------------------------------------
        --------------------------------------------*/
        function displayMessage(message) {
            console.log(message, 'Event');
        }

        function checkIfAvailable(fromDate, toDate, inputDate) {
            if (
                DateTime.fromISO(inputDate) >= DateTime.fromISO(fromDate) &&
                DateTime.fromISO(inputDate) <= DateTime.fromISO(toDate)
            ) {
                console.log('within range');
                return true;
            } else {
                 console.log('not in range');
                return false;
            }
        }

    </script>
</x-app-layout>
