@extends('core::emails.master')
@section('content')
    <table class="main" width="100%" cellpadding="0" cellspacing="0"
           style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background: #fff; margin: 0; padding: 0; border: 1px solid #e9e9e9;">
        <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; padding: 0;">
            <td class="content-wrap"
                style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;"
                valign="top">
                <table width="100%" cellpadding="0" cellspacing="0"
                       style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; padding: 0;">
                    <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; padding: 0;">
                        <td class="content-block"
                            style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 20px; font-weight:bold; vertical-align: top; margin: 0; padding: 0 0 20px;"
                            valign="top">
                            You have been shortlisted for {{$gig->title}} gig project on {{config('myapp.website_title')}}
                        </td>
                    </tr>

                    <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; padding: 0;">
                        <td class="content-block"
                            style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;"
                            valign="top">
                            <p>
                                Dear Talent,
                            </p>

                            <p> We are pleased to inform you that you’ve been shortlisted.</p>
                            <p>
                                You will be contacted for further updates
                            </p>
                        </td>
                    </tr>

                    <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; padding: 0;">
                        <td class="content-block"
                            style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;"
                            valign="top">
                            Regards.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
@endsection
