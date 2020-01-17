@extends('layouts.app')

@section('content')

    <div class="container"style="margin-top: 25px;">

        <div class="row">
            <div class="col md">
                <div class="img">
                    <img src="/storage/{{$events->image}}" alt="" height="500px" width="100%">
                </div>

            </div>
        </div>

        <div class="container-fluid m-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <div><h1>{{$events->user->Username}}</h1></div>
            <div>    <a class="btn btn-danger" href="{{$events->re}}">Registration</a></div>
            </div>
        </div>



                    <!--   Description -->

        <div    style="text-align: center">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                <p   style="color: white"> Description</p>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id=""style="color: black">
                                {{ $events->caption }}
                            </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div   style="background-color: honeydew">
                                <textarea rows="15" style="border: 0px solid white; "  cols="65%">{{$events->eabout}}</textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <div    class="container">
        <h1 class="h1">Schedule:</h1>
        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
            </tr>
            </thead>
                                <!--row1-1-->
            <tbody>

            <tr>
                <th scope="row">{{ $events->ename }}</th>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                       <p   style="color: white"> Description</p>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalScrollableTitle"style="color: black">
                                        {{ $events->etitle }}
                                    </h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                 <div   style="background-color: honeydew">
                                  <textarea rows="15" style="border: 0px solid white; "  cols="65%">{{$events->eabout}}</textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </td>


                <td>{{ $events->edate }}</td>
                <td>{{ $events->etime }}</td>
              
            </tr>

            </tbody>

            <!--row1-2-->
            <tbody>

            <tr>
                <th scope="row">{{ $events->ename2 }}</th>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                        <p   style="color: white"> Description</p>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalScrollableTitle"style="color: black">
                                        {{ $events->etitle2 }}
                                    </h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div   style="background-color: honeydew">
                                        <textarea rows="15" style="border: 0px solid white; "  cols="65%">{{$events->eabout2}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>


                <td>{{ $events->edate2 }}</td>
                <td>{{ $events->etime2 }}</td>
            </tr>

            </tbody>



            <!--row1-3-->
            <tbody>

            <tr>
                <th scope="row">{{ $events->ename3 }}</th>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                        <p   style="color: white"> Description</p>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalScrollableTitle"style="color: black">
                                        {{ $events->etitle }}
                                    </h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div   style="background-color: honeydew">
                                        <textarea rows="15" style="border: 0px solid white; "  cols="65%">{{$events->eabout3}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>


                <td>{{ $events->edate3 }}</td>
                <td>{{ $events->etime3 }}</td>
            </tr>

            </tbody>




            <!--row1-4-->
            <tbody>

            <tr>
                <th scope="row">{{ $events->ename }}</th>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                        <p   style="color: white"> Description</p>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalScrollableTitle"style="color: black">
                                        {{ $events->etitle }}
                                    </h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div   style="background-color: honeydew">
                                        <textarea rows="15" style="border: 0px solid white; "  cols="65%">{{$events->eabout}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>


                <td>{{ $events->edate }}</td>
                <td>{{ $events->etime }}</td>
            </tr>

            </tbody>



            <!--row5-->
            <tbody>

            <tr>
                <th scope="row">{{ $events->ename }}</th>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                        <p   style="color: white"> Description</p>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalScrollableTitle"style="color: black">
                                        {{ $events->etitle }}
                                    </h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div   style="background-color: honeydew">
                                        <textarea rows="15" style="border: 0px solid white; "  cols="65%">{{$events->eabout}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>


                <td>{{ $events->edate }}</td>
                <td>{{ $events->etime }}</td>
            </tr>

            </tbody>



            <!--row1-6-->
            <tbody>

            <tr>
                <th scope="row">{{ $events->ename }}</th>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                        <p   style="color: white"> Description</p>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalScrollableTitle"style="color: black">
                                        {{ $events->etitle }}
                                    </h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div   style="background-color: honeydew">
                                        <textarea rows="15" style="border: 0px solid white; "  cols="65%">{{$events->eabout}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>


                <td>{{ $events->edate }}</td>
                <td>{{ $events->etime }}</td>
            </tr>

            </tbody>

            <!--row1-7-->
            <tbody>

            <tr>
                <th scope="row">{{ $events->ename }}</th>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                        <p   style="color: white"> Description</p>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalScrollableTitle"style="color: black">
                                        {{ $events->etitle }}
                                    </h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div   style="background-color: honeydew">
                                        <textarea rows="15" style="border: 0px solid white; "  cols="65%">{{$events->eabout}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>


                <td>{{ $events->edate }}</td>
                <td>{{ $events->etime }}</td>
            </tr>

            </tbody>


            <!--row1-8-->
            <tbody>

            <tr>
                <th scope="row">{{ $events->ename }}</th>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                        <p   style="color: white"> Description</p>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalScrollableTitle"style="color: black">
                                        {{ $events->etitle }}
                                    </h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div   style="background-color: honeydew">
                                        <textarea rows="15" style="border: 0px solid white; "  cols="65%">{{$events->eabout}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>


                <td>{{ $events->edate }}</td>
                <td>{{ $events->etime }}</td>
            </tr>

            </tbody>



            <!--row1-9-->
            <tbody>

            <tr>
                <th scope="row">{{ $events->ename }}</th>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                        <p   style="color: white"> Description</p>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalScrollableTitle"style="color: black">
                                        {{ $events->etitle }}
                                    </h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div   style="background-color: honeydew">
                                        <textarea rows="15" style="border: 0px solid white; "  cols="65%">{{$events->eabout}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>


                <td>{{ $events->edate }}</td>
                <td>{{ $events->etime }}</td>
            </tr>

            </tbody>


            <!--row1-10-->
            <tbody>

            <tr>
                <th scope="row">{{ $events->ename }}</th>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                        <p   style="color: white"> Description</p>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalScrollableTitle"style="color: black">
                                        {{ $events->etitle }}
                                    </h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div   style="background-color: honeydew">
                                        <textarea rows="15" style="border: 0px solid white; "  cols="65%">{{$events->eabout}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>


                <td>{{ $events->edate }}</td>
                <td>{{ $events->etime }}</td>
            </tr>

            </tbody>






        </table>
    </div>

    </div>


@endsection
