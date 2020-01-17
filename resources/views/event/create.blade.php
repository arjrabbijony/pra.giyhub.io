@extends('layouts.app')

@section('content')

<div class="container"style="margin-top: 40px;background-color: whitesmoke">
    <form action="/c" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Create A Event</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Event Name</label>

                    <input id="caption"
                           type="text"
                           class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                           name="caption"
                           value="{{ old('caption') }}"
                           autocomplete="caption" autofocus>

                    @if ($errors->has('caption'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif

                    <label for="motive" class="col-md-4 col-form-label">Motive</label>

                    <input id="motive"
                           type="text"
                           class="form-control{{ $errors->has('motive') ? ' is-invalid' : '' }}"
                           name="motive"
                           value="{{ old('motive') }}"
                           autocomplete="motive" autofocus>

                    @if ($errors->has('motive'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('motive') }}</strong>
                        </span>
                    @endif
                    <label for="contact" class="col-md-4 col-form-label">Contact</label>

                    <input id="contact"
                           type="text"
                           class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}"
                           name="contact"
                           value="{{ old('contact') }}"
                           autocomplete="contact" autofocus>

                    @if ($errors->has('contact'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact') }}</strong>
                        </span>
                    @endif

                    <label for="re" class="col-md-4 col-form-label">Registration Link/Google Form Link</label>

                    <input id="re"
                           type="text"
                           class="form-control{{ $errors->has('re') ? ' is-invalid' : '' }}"
                           name="re"
                           value="{{ old('re') }}"
                           autocomplete="re" autofocus>

                    @if ($errors->has('re'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('re') }}</strong>
                        </span>
                    @endif

                    <label for="desc" class="col-md-4 col-form-label">Description</label>

                    <textarea
                            id="desc"
                            class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}"
                            name="desc"
                            rows="6"

                            autocomplete="desc" autofocus>

                    </textarea>
                    @if ($errors->has('desc'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('desc') }}</strong>
                        </span>
                    @endif

                </div>

            <h2>Schedule</h2>
                <div    class="container">
                    <table class="table table-hover table-dark">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <th scope="row">
                            Event Name:<input id="ename"
                                       type="text"
                                       class="form-control{{ $errors->has('ename') ? ' is-invalid' : '' }}"
                                       name="ename"
                                       value="{{ old('ename') }}"
                                       autocomplete="ename" autofocus>

                                @if ($errors->has('ename'))
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ename') }}</strong>
                        </span>
                                @endif

                            </th>
                            <td>
                                <!--Button trigger modal -->
                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                                    <p   style="color: white"> Description</p>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id=""style="color: black">
                                                    Event Title:<input id="etitle"
                                                                      type="text"
                                                                      class="form-control{{ $errors->has('etitle') ? ' is-invalid' : '' }}"
                                                                      name="etitle"
                                                                      value="{{ old('etitle') }}"
                                                                      autocomplete="etitle" autofocus>

                                                    @if ($errors->has('etitle'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('etitle') }}</strong>
                                                        </span>
                                                    @endif

                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
      <p style="color: black">  Event Description:</p><textarea
                                                       id="eabout"

                                                       class="form-control{{ $errors->has('eabout') ? ' is-invalid' : '' }}"
                                                       name="eabout"
                                                       rows="15"
                                                       value="{{ old('eabout') }}"
                                                       autocomplete="eabout" autofocus>


                                            </textarea>
                                                @if ($errors->has('eabout'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('eabout') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"data-save="modal">Save</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Date:<input id="edate"
                                                  type="text"
                                                  class="form-control{{ $errors->has('edate') ? ' is-invalid' : '' }}"
                                                  name="edate"
                                                  value="{{ old('edate') }}"
                                                  autocomplete="edate" autofocus>

                                @if ($errors->has('edate'))
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('edate') }}</strong>
                        </span>
                                @endif
                            </td>
                            <td>
                               Time:<input id="etime"
                                                  type="text"
                                                  class="form-control{{ $errors->has('etime') ? ' is-invalid' : '' }}"
                                                  name="etime"
                                                  value="{{ old('etime') }}"
                                                  autocomplete="ename" autofocus>

                                @if ($errors->has('etime'))
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('etime') }}</strong>
                        </span>
                                @endif
                            </td>
                        </tr>
                        </tbody>


                     <!--ROW-2-->
                        <tr>
                            <th scope="row">
                                Event Name:<input id="ename2"
                                                  type="text"
                                                  class="form-control{{ $errors->has('ename2') ? ' is-invalid' : '' }}"
                                                  name="ename2"
                                                  value="{{ old('ename2') }}"
                                                  autocomplete="ename2" autofocus>

                                @if ($errors->has('ename2'))
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ename2') }}</strong>
                        </span>
                                @endif

                            </th>
                            <td>
                                <!--Button trigger modal -->
                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                                    <p   style="color: white"> Description</p>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalScrollable" tabindex="-2" role="dialog" aria-labelledby="exampleModalScrollableTitle2" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title2" id=""style="color: black">
                                                    Event Title:<input id="etitle2"
                                                                       type="text"
                                                                       class="form-control{{ $errors->has('etitle2') ? ' is-invalid' : '' }}"
                                                                       name="etitle2"
                                                                       
                                                                       autocomplete="etitle2" autofocus>

                                                    @if ($errors->has('etitle2'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('etitle2') }}</strong>
                                                        </span>
                                                    @endif

                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body2">
                                                <p style="color: black">  Event Description:</p><textarea
                                                        id="eabou2t"

                                                        class="form-control{{ $errors->has('eabout2') ? ' is-invalid' : '' }}"
                                                        name="eabout2"
                                                        rows="15"
                                                        
                                                        autocomplete="eabout2" autofocus>


                                            </textarea>
                                                @if ($errors->has('eabout2'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('eabout2') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"data-save="modal">Save</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Date:<input id="edate2"
                                            type="text"
                                            class="form-control{{ $errors->has('edate2') ? ' is-invalid' : '' }}"
                                            name="edate2"
                                            value="{{ old('edate2') }}"
                                            autocomplete="edate2" autofocus>

                                @if ($errors->has('edate2'))
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('edate2') }}</strong>
                        </span>
                                @endif
                            </td>
                            <td>
                                Time:<input id="etime2"
                                            type="text"
                                            class="form-control{{ $errors->has('etime2') ? ' is-invalid' : '' }}"
                                            name="etime2"
                                            value="{{ old('etime2') }}"
                                            autocomplete="etime2" autofocus>

                                @if ($errors->has('etime2'))
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('etime2') }}</strong>
                        </span>
                                @endif
                            </td>
                        </tr>
                        </tbody>

                      



                            <!--ROW-3-->
                            <tr>
                            <th scope="row">
                                Event Name:<input id="ename3"
                                                  type="text"
                                                  class="form-control{{ $errors->has('ename3') ? ' is-invalid' : '' }}"
                                                  name="ename3"
                                                  value="{{ old('ename3') }}"
                                                  autocomplete="ename3" autofocus>

                                @if ($errors->has('ename3'))
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ename3') }}</strong>
                        </span>
                                @endif

                            </th>
                            <td>
                                <!--Button trigger modal -->
                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalScrollable">
                                    <p   style="color: white"> Description</p>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalScrollable" tabindex="-2" role="dialog" aria-labelledby="exampleModalScrollableTitle2" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title2" id=""style="color: black">
                                                    Event Title:<input id="etitle3"
                                                                       type="text"
                                                                       class="form-control{{ $errors->has('etitle3') ? ' is-invalid' : '' }}"
                                                                       name="etitle3"
                                                                       
                                                                       autocomplete="etitle3" autofocus>

                                                    @if ($errors->has('etitle3'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('etitle3') }}</strong>
                                                        </span>
                                                    @endif

                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body2">
                                                <p style="color: black">  Event Description:</p><textarea
                                                        id="eabout3"

                                                        class="form-control{{ $errors->has('eabout3') ? ' is-invalid' : '' }}"
                                                        name="eabout3"
                                                        rows="15"
                                                        
                                                        autocomplete="eabout3" autofocus>


                                            </textarea>
                                                @if ($errors->has('eabout3'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('eabout3') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"data-save="modal">Save</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Date:<input id="edate3"
                                            type="text"
                                            class="form-control{{ $errors->has('edate3') ? ' is-invalid' : '' }}"
                                            name="edate3"
                                            value="{{ old('edate3') }}"
                                            autocomplete="edate3" autofocus>

                                @if ($errors->has('edate3'))
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('edate3') }}</strong>
                        </span>
                                @endif
                            </td>
                            <td>
                                Time:<input id="etime3"
                                            type="text"
                                            class="form-control{{ $errors->has('etime3') ? ' is-invalid' : '' }}"
                                            name="etime3"
                                            value="{{ old('etime3') }}"
                                            autocomplete="etime3" autofocus>

                                @if ($errors->has('etime3'))
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('etime3') }}</strong>
                        </span>
                                @endif
                            </td>
                        </tr>
                        </tbody>

                    </table>
                </div>


                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Add Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
