<table width="100%">
    <thead>
        <tr>
            <th width="200">@lang('messages.nameTabTitle')</th>
            <th>@lang('messages.licenceTabTitle')</th>
            <th width="170">@lang('messages.actionTabTitle')</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($licences as $licence)
        <tr data-id="{{{ $licence->id }}}">
            <td>{{{ $licence->name }}}</td>
            <td class="licence">*****</td>
            <td>
                <a href="#" class="button split tiny text-center"><div style="display:inline" class="showLicence">@lang('messages.showKeyButton')</div> <span data-dropdown="drop-lic-{{{ $licence->id }}}"></span></a>
                <ul id="drop-lic-{{{ $licence->id }}}" class="f-dropdown" data-dropdown-content>
                    
                    @foreach ($licence->sheets as $file)
                    <li><a class="downloadLicence" data-id="{{{ $file->id }}}" href="#">@lang('messages.downloadSubButton',array("name" => $file->name))</a></li>
                    @endforeach
                    @if(Auth::user()->IsWrite())
                    <li><a class="editLicence" href="#">@lang('messages.editSubButton')</a></li>
                    <li><a class="deleteLicence" href="#">@lang('messages.removeSubButton')</a></li>
                    
                    <li><a data-reveal-id="mainModal" data-reveal-ajax="/sheet/list/{{{ $licence->id }}}" href="#">@lang('messages.manageFiles')</a></li>
                    @endif
                </ul>
            </td>            
        </tr>
        @endforeach
    </tbody>
</table>