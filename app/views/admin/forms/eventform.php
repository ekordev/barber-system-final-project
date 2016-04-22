<div class="aside" tabindex="-1" role="dialog">
    <div class="aside-dialog">
        <div class="aside-content">
            <div class="aside-header" ng-show="title">
                <button type="button" class="close" ng-click="$hide()">&times;</button>
                <h4 class="aside-title" ng-bind-html="title"></h4>
            </div>
            <div class="aside-body" >


                <form name="frmAppointments" class="form-horizontal" novalidate="">

                    <div class="form-group error">
                        <label for="inputEmail3" class="col-sm-3 control-label">Client</label>
                        <div class="col-sm-5">
                            <select name="user_id" id="user_id" ng-model="selected_event.user_id" class="form-control" ng-required="true">
                                <option ng-repeat="client in clients" value="{{client.user_id}}"
                                        ng-selected="client.user_id == selected_event.user_id" >{{client.first_name}} {{client.last_name}}</option>
                            </select>
                                    <span class="help-inline"
                                          ng-show="frmAppointments.user_id.$invalid && frmAppointments.user_id.$touched">Client field is required</span>
                        </div>
                    </div>

                    <div class="form-group error">
                        <label for="inputEmail3" class="col-sm-3 control-label">Barber</label>
                        <div class="col-sm-5">
                            <select name="barber_id" id="barber_id" ng-model="selected_event.barber_id" class="form-control" ng-required="true">
                                <option ng-repeat="barber in barbers" value="{{barber.user_id}}"  ng-selected="barber.user_id == selected_event.barber_id">{{barber.first_name}} {{barber.last_name}}</option>
                            </select>
                                    <span class="help-inline"
                                          ng-show="frmAppointments.barber_id.$invalid && frmAppointments.barber_id.$touched">Barber field is required</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Haircut Selection</label>
                        <div class="col-sm-7">
                            <select ng-model="selected_event.haircut_type" class="form-control" id="haircut_type" name="haircut_type" ng-change="getTimes(selected_event.haircut_type)" placeholder="Haircut Type" value="{{haircut_type}}"
                                    ng-required="true">
                                <option value="Dry Cut">Dry Cut</option>
                                <option value="Wet Cut">Wet Cut</option>
                                <option value="Style Cut">Style Cut</option>
                                <option value="Hot Towel Shave">Hot Towel Shave</option>
                                <option value="Dry Cut & Hot Towel Shave">Dry Cut & Hot Towel Shave</option>
                                <option value="Wet Cut & Hot Towel Shave">Wet Cut & Hot Towel Shave</option>
                                <option value="Style Cut & Hot Towel Shave">Style Cut & Hot Towel Shave</option>
                            </select>
                                    <span class="help-inline"
                                          ng-show="frmAppointments.haircut_type.$invalid && frmAppointments.haircut_type.$touched">Haircut field is required</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Music Genre Selection</label>
                        <div class="col-sm-5">
                            <select ng-model="selected_event.music_choice" class="form-control" id="music_choice" name="music_choice" placeholder="Music Choice"
                                    value="{{music_choice}}" ng-required="true">
                                <option value="None">None</option>
                                <option value="Pop">Pop</option>
                                <option value="Hip Hop/Rap">Hip Hop/Rap</option>
                                <option value="Reggae">Reggae</option>
                                <option value="RnB/Soul">RnB/Soul</option>
                                <option value="Rock">Rock</option>
                            </select>

                            <span class="help-inline"
                                  ng-show="frmAppointments.music_choice.$invalid && frmAppointments.music_choice.$touched">Music Genre field is required</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Music Artist Selection</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="music_artist" name="music_artist" placeholder="Artist Selection" value="{{music_artist}}"
                                   ng-model="selected_event.music_artist">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Beverage Selection</label>
                        <div class="col-sm-5">
                            <select ng-model="selected_event.drink_choice" class="form-control" id="drink_choice" name="drink_choice" placeholder="Drink Choice"
                                    value="{{drink_choice}}" ng-required="true">
                                <option value="None">None</option>
                                <option value="Tea">Tea</option>
                                <option value="Ice Tea">Ice Tea</option>
                                <option value="Latte">Latte</option>
                                <option value="Cappuccino">Cappuccino</option>
                                <option value="Freshly Squeezed Juice">Freshly Squeezed Juice</option>
                                <option value="Soft Drink">Soft Drink</option>
                            </select>
                            <span class="help-inline"
                                  ng-show="frmAppointments.drink_choice.$invalid && frmAppointments.drink_choice.$touched">Beverage field is required</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="{{date}}"
                                   ng-model="selected_event.date" ng-required="true">
                            <span class="help-inline"
                                  ng-show="frmAppointments.date.$invalid && frmAppointments.date.$touched">Date field is required</span>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary" ng-disabled="addEvent.date.$invalid || addEvent.haircut_type.$invalid" ng-click="showTimes = !showTimes">Get Available Times</button>
                    <hr>
                    <div uib-collapse="showTimes">
                        <div class="form-group">
                            <div class="col-sm-7">
                                <select name="time" id="time" ng-model="selected_event.time" class="form-control" ng-required="true">
                                    <option ng-repeat="time in times" value="{{time}}">
                                        {{time.start_time}} {{time.end_time}}</option>
                                </select>
                                <span class="help-inline"
                                      ng-show="frmAppointments.time.$invalid && frmAppointments.time.$touched">Time field is required</span>

                            </div>
                        </div>
                    </div>

                    <form>

            </div>
            <tt>barber = {{selected_event.barber_id}}</tt><br/>
            <tt>client = {{selected_event.user_id}}</tt><br/>
            <tt>times = {{appointment.time}}</tt><br/>
            <tt>date = {{selected_event.date}}</tt><br/>

            <div class="aside-footer">
                <button type="button" class="btn btn-default" ng-click="$hide()">Close</button>
                <button class="btn btn-danger" ng-click="removeEvent(selected_event.appointment_id)" data-toggle="tooltip" title="Delete">Delete</button>
                <button type="button" class="btn btn-primary" id="btn-save" data-toggle="tooltip" title="Save" ng-click="updateEvent(selected_event.appointment_id)" ng-disabled="frmAppointments.$invalid">Save</button>
            </div>
        </div>
    </div>
</div>