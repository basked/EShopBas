@section('css')
@endsection

@extends('layouts.layout')
@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Autocomplete</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Autocomplete</li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="block">
                    <div class="title"><strong class="d-block">Autocomplete - Bootstrap Typeahead</strong></div>
                    <div class="block-body">
                        <p>

                            This template comes with an integration of TypeAhead autocomplete plugin. See more about it
                            at<a href="https://github.com/bassjobsen/Bootstrap-3-Typeahead" target="_blank">https://github.com/bassjobsen/Bootstrap-3-Typeahead</a>or
                            simply try out some nice examples of its functionality below.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block">
                            <div class="title"><strong class="d-block">Basic example - data attributes
                                    initialization</strong></div>
                            <div class="block-body">
                                <p>Try typing "ite".</p>
                                <div class="form-group form-group-typeahead">
                                    <input type="text" placeholder="item..." data-provide="typeahead"
                                           data-source="[&quot;item 1&quot;,&quot;item 2&quot;,&quot;item 3&quot;]"
                                           class="form-control">
                                </div>
                                <pre class="mt-3">&lt;input type="text"
data-provide="typeahead"
data-source='["item 1","item 2","item 3"]'
placeholder="item..."
class="form-control" />                        </pre>
                            </div>
                        </div>
                        <div class="block">
                            <div class="title"><strong class="d-block">Loading JSON array</strong></div>
                            <div class="block-body">
                                <p>Try typing your country.</p>
                                <div class="form-group form-group-typeahead">
                                    <input id="typeahead2" type="text" placeholder="item..." class="form-control">
                                </div>
                                <pre class="mt-3">$.get('data/countries.json', function(data){
    $("#typeahead2").typeahead({ source:data.countries });
},'json');                         </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="block">
                            <div class="title"><strong class="d-block">Basic example - JavaScript
                                    initialization</strong></div>
                            <div class="block-body">
                                <p>Try typing "ite".</p>
                                <div class="form-group form-group-typeahead">
                                    <input id="typeahead4" type="text" placeholder="item..." class="form-control">
                                </div>
                                <pre class="mt-3">$('#typeahead4').typeahead({
    source: ["item 1","item 2","item 3"]
});                   </pre>
                            </div>
                        </div>
                        <div class="block">
                            <div class="title"><strong class="d-block">Custom search in JSON object</strong></div>
                            <div class="block-body">
                                <p>Try typing "Whi" -> it searches in surnames, firstnames, company names. After you
                                    select the item, person's email is inserted into the input field.</p>
                                <div class="form-group form-group-typeahead">
                                    <input id="typeahead3" type="text" placeholder="item..." class="form-control">
                                </div>
                                <pre class="mt-3">$('#typeahead3').typeahead({
    displayText: function (item) {
        return item.name + ' ' + item.surname + ', ' + item.company
    },
    afterSelect: function (item) {
        this.$element[0].value = item.email
    },
    source: [
        { "name": "Alyce", "surname": "White", "company": "Combot", "email": "alycewhite@combot.com", "city": "Talpa" },
        { "name": "Santos", "surname": "Pierce", "company": "Franscene", "email": "santospierce@franscene.com", "city": "Vienna" },
        { "name": "Deirdre", "surname": "Reed", "company": "Whiskey Comp.", "email": "deirdrereed@whiskeycomp.com", "city": "Belva" },
        { "name": "Whitaker", "surname": "Brennan", "company": "Opticom", "email": "whitakerbrennan@opticom.com", "city": "Lodoga" },
        { "name": "Kristin", "surname": "Norman", "company": "Irack", "email": "kristinnorman@irack.com", "city": "Bodega" }
    ]
});
</pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="title"><strong class="d-block">Typeahead options </strong></div>
                    <div class="block-body">
                        <p>Options can be passed via data attributes or JavaScript. For data attributes, append the
                            option name to <code>data-</code>, as in <code>data-source=""</code>.</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Default</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>source</td>
                                    <td>array, function</td>
                                    <td>[ ]</td>
                                    <td>The data source to query against. May be an array of strings, an array of JSON
                                        object with a name property or a function. The function accepts two arguments,
                                        the <code>query</code> value in the input field and the <code>process</code>
                                        callback. The function may be used synchronously by returning the data source
                                        directly or asynchronously via the <code>process</code> callback's single
                                        argument.
                                    </td>
                                </tr>
                                <tr>
                                    <td>items</td>
                                    <td>number</td>
                                    <td>8</td>
                                    <td>The max number of items to display in the dropdown. Can also be set to &apos;all&apos;</td>
                                </tr>
                                <tr>
                                    <td>minLength</td>
                                    <td>number</td>
                                    <td>1</td>
                                    <td>The minimum character length needed before triggering autocomplete suggestions.
                                        You can set it to 0 so suggestion are shown even when there is no text when
                                        lookup function is called.
                                    </td>
                                </tr>
                                <tr>
                                    <td>showHintOnFocus</td>
                                    <td>boolean</td>
                                    <td>false</td>
                                    <td>If hints should be shown when applicable as soon as the input gets focus.</td>
                                </tr>
                                <tr>
                                    <td>scrollHeight</td>
                                    <td>number, function</td>
                                    <td>0</td>
                                    <td>Number of pixels the scrollable parent container scrolled down (scrolled out the
                                        viewport).
                                    </td>
                                </tr>
                                <tr>
                                    <td>matcher</td>
                                    <td>function</td>
                                    <td>case insensitive</td>
                                    <td>The method used to determine if a query matches an item. Accepts a single
                                        argument, the item against which to test the query. Access the current query
                                        with this.query. Return a boolean true if query is a match.
                                    </td>
                                </tr>
                                <tr>
                                    <td>sorter</td>
                                    <td>function</td>
                                    <td><br><br></td>
                                    <td>Method used to sort autocomplete results. Accepts a single argument
                                        <code>items</code> and has the scope of the typeahead instance. Reference the
                                        current query with <code>this.query</code>.
                                    </td>
                                </tr>
                                <tr>
                                    <td>updater</td>
                                    <td>function</td>
                                    <td>returns selected item</td>
                                    <td>The method used to return selected item. Accepts a single argument, the <code>item</code>
                                        and has the scope of the typeahead instance.
                                    </td>
                                </tr>
                                <tr>
                                    <td>highlighter</td>
                                    <td>function</td>
                                    <td>highlights all default matches</td>
                                    <td>Method used to highlight autocomplete results. Accepts a single argument <code>item</code>
                                        and has the scope of the typeahead instance. Should return html.
                                    </td>
                                </tr>
                                <tr>
                                    <td>displayText</td>
                                    <td>function</td>
                                    <td>item.name || item</td>
                                    <td>Method used to get textual representation of an item of the sources. Accepts a
                                        single argument <code>item</code> and has the scope of the typeahead instance.
                                        Should return a String.
                                    </td>
                                </tr>
                                <tr>
                                    <td>autoSelect</td>
                                    <td>boolean</td>
                                    <td>true</td>
                                    <td>Allows you to dictate whether or not the first suggestion is selected
                                        automatically. Turning autoselect off also means that the input won't clear if
                                        nothing is selected and <kbd>enter</kbd> or <kbd>tab</kbd> is hit.
                                    </td>
                                </tr>
                                <tr>
                                    <td>afterSelect</td>
                                    <td>function</td>
                                    <td>$.noop()</td>
                                    <td>Call back function to execute after selected an item. It gets the current active
                                        item in parameter if any.
                                    </td>
                                </tr>
                                <tr>
                                    <td>delay</td>
                                    <td>integer</td>
                                    <td>0</td>
                                    <td>Adds a delay between lookups.</td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>addItem</td>
                                    <td>JSON object</td>
                                    <td>false</td>
                                    <td>Adds an item to the end of the list, for example "New Entry". This could be
                                        used, for example, to pop a dialog when an item is not found in the list of
                                        data. Example: <a href="http://cl.ly/image/2u170I1q1G3A/addItem.png">http://cl.ly/image/2u170I1q1G3A/addItem.png</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @section('js')
            <script src="{{ asset('css/dark-admin/js/forms-autocomplete.js') }}"></script>
            <script src="{{ asset('css/dark-admin/js/front.js') }}"></script>
        @endsection
    </div>
@endsection

