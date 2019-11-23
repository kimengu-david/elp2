@extends('admin.layouts.master')
@section('content')

    <form action="{{route('scholars.store')}}" method="POST">
        {{@csrf_field()}}
        <div class="modal-body">
            <div class="form-group">
                <input v-model="form.pf_number" placeholder="Pf Number" id="pf_number" type="text"
                       name="pf_number"
                       class="form-control" :class="{ 'is-invalid': form.errors.has('pf_number') }">
                <has-error :form="form" field="pf_number"></has-error>
            </div>

            <div class="form-group">
                <input v-model="form.name" placeholder="name" id="name" type="text" name="name"
                       class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                <has-error :form="form" field="name"></has-error>
            </div>
            <div class="form-group">
                <select v-model="form.gender" id="gender" name="gender" class="form-control"
                        :class="{ 'is-invalid': form.errors.has('gender') }">
                    <option value="">Select Gender</option>
                    <option value="MALE">Male</option>
                    <option value="FEMALE">Femail</option>
                    <option value="UNSPECIFIED">Unspecified</option>

                </select>
                <has-error :form="form" field="gender"></has-error>
            </div>
            <div class="form-group">
                <select v-model="form.county_of_residence" id="county_of_residence"
                        name="county_of_residence"
                        class="form-control"
                        :class="{ 'is-invalid': form.errors.has('county_of_residence') }">
                    <option value="">Select County of Residence</option>
                    <option value="Nairobi">Nairobi</option>
                    <option value="Kirinyaga">Kirinyaga</option>
                    <option value="Nyeri">Nyeri</option>

                </select>
                <has-error :form="form" field="county_of_residence"></has-error>
            </div>
            <div class="form-group">
                <input v-model="form.email1" placeholder="Email1" id="email1" type="email" name="email1"
                       class="form-control" :class="{ 'is-invalid': form.errors.has('email1') }">
                <has-error :form="form" field="email1"></has-error>
            </div>
            <div class="form-group">
                <input v-model="form.email2" placeholder="Email2" id="email2" type="email" name="email2"
                       class="form-control" :class="{ 'is-invalid': form.errors.has('email1') }">
                <has-error :form="form" field="email2"></has-error>
            </div>    <div class="form-group">
                <input v-model="form.phone_number" placeholder="Phone Number" id="phone_number" type="text" name="phone_number"
                       class="form-control" :class="{ 'is-invalid': form.errors.has('phone_number') }">
                <has-error :form="form" field="phone_number"></has-error>
            </div>
            <div class="form-group">
                <input v-model="form.family_contact" placeholder="family_contact" id="family_contact"
                       type="text" name="family_contact"
                       class="form-control"
                       :class="{ 'is-invalid': form.errors.has('family_contact') }">
                <has-error :form="form" field="family_contact"></has-error>
            </div>
            <div class="form-group">
                <select v-model="form.family_contact_relationship" id="family_contact_relationship"
                        name="family_contact_relationship" class="form-control"
                        :class="{ 'is-invalid': form.errors.has('family_contact_relationship') }">
                    <option value="">Select Contact Relationship</option>
                    <option value="Mother">Mother</option>
                    <option value="Father">Father</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                    <option value="Guardian">Guardian</option>

                </select>
                <has-error :form="form" field="family_contact_relationship"></has-error>
            </div>
            <div class="form-group">
                <select v-model="form.high_school" id="high_school" name="high_school"
                        class="form-control"
                        :class="{ 'is-invalid': form.errors.has('high_school') }">
                    <option value="">Select High School</option>
                    <option value="Kangaru School">Kangaru School</option>
                    <option value="Alliance High School">Alliance High</option>
                    <option value="Starehe Boys Center">Starehe Boys Center</option>

                </select>
                <has-error :form="form" field="high_school"></has-error>
            </div>
            <div class="form-group">
                <select v-model="form.mean_grade" id="mean_grade" name="mean_grade" class="form-control"
                        :class="{ 'is-invalid': form.errors.has('mean_grade') }">
                    <option value="">Select Grade</option>
                    <option value="A">A</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>

                </select>
                <has-error :form="form" field="mean_grade"></has-error>
            </div>

            <div class="form-group">
                <select v-model="form.elp_class" id="elp_class" name="elp_class" class="form-control"
                        :class="{ 'is-invalid': form.errors.has('elp_class') }">
                    <option value="">Select ELP Class</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>

                </select>
                <has-error :form="form" field="elp_class"></has-error>
            </div>
            <div class="form-group">
                <select v-model="form.selection_criteria" id="selection_ctiteria"
                        name="selection_criteria" class="form-control"
                        :class="{ 'is-invalid': form.errors.has('selection_criteria') }">
                    <option value="">Selection Criteria</option>
                    <option value="Top In District">Top In District</option>
                    <option value="Wing To Fly">Wings To Fly</option>

                </select>
                <has-error :form="form" field="elp_class"></has-error>
            </div>
            <div class="form-group">
                <select v-model="form.university" id="university"
                        name="university" class="form-control"
                        :class="{ 'is-invalid': form.errors.has('university') }">
                    <option value="">Choose University</option>
                    <option value="University of Nairobi">University of Nairobi</option>
                    <option value="Kenyatta University">Kenyatta University</option>
                </select>
                <has-error :form="form" field="university"></has-error>
            </div>
            <div class="form-group">
                <select v-model="form.branch_posting" id="branch_posting"
                        name="branch_posting" class="form-control"
                        :class="{ 'is-invalid': form.errors.has('branch_posting') }">
                    <option value="">Choose University</option>
                    <option value="Kagio Branch">Kagio Branch</option>
                    <option value="Embu Branch">Embu Branch</option>
                </select>
                <has-error :form="form" field="branch_posting"></has-error>
            </div>
            <div class="form-group">
                <select v-model="form.course" id="course"
                        name="course" class="form-control"
                        :class="{ 'is-invalid': form.errors.has('course') }">
                    <option value="">Choose Course</option>
                    <option value="BSC Computer Science">BSC Computer Science</option>
                    <option value="Applied Mathematics">Applied Mathematics</option>
                </select>
                <has-error :form="form" field="course"></has-error>
            </div>
        </div>
        <div class="modal-footer">
            <button type="Submit" class="btn btn-primary">Create</button>

        </div>
    </form>

@endsection