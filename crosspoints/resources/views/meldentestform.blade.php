@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form id="regForm" action="{{route('meldentestinfo')}}">
                    @csrf
                    @if(in_array('Pesten', $selected))
                        <div class="tab h2 text-center">Bent u tijdens u arbeidsuren constant alert op voorvallen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>

                        <div class="tab h2 text-center">Piekert u na uw werktijden ook over wat er is gebeurd?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u slaapproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u concentratieproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u last van extreme emoties?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u vermijdend gedrag?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                    @endif()

                    @if(in_array('Agressie', $selected))
                        <div class="tab h2 text-center">Bent u tijdens u arbeidsuren constant alert op voorvallen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>

                        <div class="tab h2 text-center">Piekert u na uw werktijden ook over wat er is gebeurd?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u slaapproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u concentratieproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u last van extreme emoties?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u vermijdend gedrag?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                    @endif()
                    @if(in_array('Disciminatie', $selected))
                        <div class="tab h2 text-center">Bent u tijdens u arbeidsuren constant alert op voorvallen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>

                        <div class="tab h2 text-center">Piekert u na uw werktijden ook over wat er is gebeurd?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u slaapproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u concentratieproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u last van extreme emoties?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u vermijdend gedrag?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                    @endif()
                    @if(in_array('Seksuele intimidatie', $selected))
                        <div class="tab h2 text-center">Bent u tijdens u arbeidsuren constant alert op voorvallen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>

                        <div class="tab h2 text-center">Piekert u na uw werktijden ook over wat er is gebeurd?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u slaapproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u concentratieproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u last van extreme emoties?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u vermijdend gedrag?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                    @endif()
                    @if(in_array('Spanning op de werkvloer', $selected))
                        <div class="tab h2 text-center">Bent u tijdens u arbeidsuren constant alert op voorvallen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>

                        <div class="tab h2 text-center">Piekert u na uw werktijden ook over wat er is gebeurd?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u slaapproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u concentratieproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u last van extreme emoties?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u vermijdend gedrag?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                    @endif()
                    @if(in_array('Machtsmisbruik', $selected))
                        <div class="tab h2 text-center">Bent u tijdens u arbeidsuren constant alert op voorvallen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>

                        <div class="tab h2 text-center">Piekert u na uw werktijden ook over wat er is gebeurd?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u slaapproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u concentratieproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u last van extreme emoties?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u vermijdend gedrag?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                    @endif()
                    @if(in_array('Constante kritiek', $selected))
                        <div class="tab h2 text-center">Bent u tijdens u arbeidsuren constant alert op voorvallen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>

                        <div class="tab h2 text-center">Piekert u na uw werktijden ook over wat er is gebeurd?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u slaapproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u concentratieproblemen?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u last van extreme emoties?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                        <div class="tab h2 text-center">Heeft u vermijdend gedrag?
                            <div class="d-flex justify-content-center">
                                <div><button type="button" onclick="onclickbuttonhandler(1)" name="vraag-ja" class="melden-yesno-button">ja</button></div>
                                <div><button type="button" onclick="onclickbuttonhandler(2)" name="vraag-nee" class="melden-yesno-button">nee</button></div>
                            </div>
                        </div>
                    @endif()

                    <div>
                        <div class="d-flex justify-content-center">
                            <button type="button" id="prevBtn" onclick="conclickprevhandler()">Vorige</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Volgende</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        @if(in_array('Pesten', $selected))
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        @endif
                        @if(in_array('Agressie', $selected))
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        @endif
                        @if(in_array('Disciminatie', $selected))
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        @endif
                        @if(in_array('Seksuele intimidatie', $selected))
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        @endif
                        @if(in_array('Spanning op de werkvloer', $selected))
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        @endif
                        @if(in_array('Machtsmisbruik', $selected))
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        @endif
                        @if(in_array('Constante kritiek', $selected))
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        @endif
                    </div>
                </form>
                <script>
                    var currentTab = 0; // Current tab is set to be the first tab (0)
                    var awnsers =[];
                    showTab(currentTab); // Display the current tab

                    function showTab(n) {
                        // This function will display the specified tab of the form...
                        var x = document.getElementsByClassName("tab");
                        x[n].style.display = "block";
                        //... and fix the Previous/Next buttons:
                        if (n == 0) {
                            document.getElementById("prevBtn").style.display = "none";
                        } else {
                            document.getElementById("prevBtn").style.display = "inline";
                        }

                        if (n == (x.length - 1)) {
                            console.log("Laatste vraag");
                            document.getElementById("nextBtn").innerHTML = "Next step";
                            document.getElementById("nextBtn").onclick = function () {
                                location.href = "{{ route('meldentestinfo') }}";
                            };
                            document.getElementById("vraag-ja").onclick = function (){
                                redirectnext()
                            }
                            document.getElementById("vraag-nee").onclick = function (){
                                redirectnextfalse()
                            }
                        } else {
                            document.getElementById("nextBtn").innerHTML = "Next";
                        }
                        //... and run a function that will display the correct step indicator:
                        fixStepIndicator(n)
                    }

                    function nextPrev(n) {
                        // This function will figure out which tab to display
                        var x = document.getElementsByClassName("tab");
                        // Exit the function if any field in the current tab is invalid:
                        if (n == 1 && !validateForm()) return false;
                        // Hide the current tab:
                        x[currentTab].style.display = "none";
                        // Increase or decrease the current tab by 1:
                        currentTab = currentTab + n;
                        // if you have reached the end of the form...
                        if (currentTab >= x.length) {
                            // ... the form gets submitted:
                            document.getElementById("regForm").submit();
                            return false;
                        }
                        // Otherwise, display the correct tab:
                        showTab(currentTab);
                    }
                    function addAwnser(x){
                        awnsers.push(x);
                    }
                    function validateForm() {
                        // This function deals with validation of the form fields
                        var x, y, i, valid = true;
                        x = document.getElementsByClassName("tab");
                        y = x[currentTab].getElementsByTagName("input");
                        // A loop that checks every input field in the current tab:
                        for (i = 0; i < y.length; i++) {
                            // If a field is empty...
                            if (y[i].value == "") {
                                // add an "invalid" class to the field:
                                y[i].className += " invalid";
                                // and set the current valid status to false
                                valid = false;
                            }
                        }
                        // If the valid status is true, mark the step as finished and valid:
                        if (valid) {
                            document.getElementsByClassName("step")[currentTab].className += " finish";
                        }
                        return valid; // return the valid status
                    }

                    function fixStepIndicator(n) {
                        // This function removes the "active" class of all steps...
                        var i, x = document.getElementsByClassName("step");
                        for (i = 0; i < x.length; i++) {
                            x[i].className = x[i].className.replace(" active", "");
                        }
                        //... and adds the "active" class on the current step:
                        x[n].className += " active";
                    }
                    function onclickbuttonhandler(x) {
                        addAwnser(x);
                        nextPrev(1);
                    }
                    function conclickprevhandler(){
                        var x = document.getElementsByClassName("step");
                        document.getElementsByClassName("step")[currentTab -1].className = "step";
                        awnsers.pop();
                        nextPrev(-1);
                        console.log(awnsers);
                    }
                    function redirectnext(){
                        onclickbuttonhandler(1)
                        location.href = "{{ route('meldentestinfo') }}";
                    }
                    function redirectnextfalse(){
                        onclickbuttonhandler(2)
                        location.href = "{{ route('meldentestinfo') }}";
                    }

                </script>

            </div>
        </div>
    </div>
</div>
@endsection
