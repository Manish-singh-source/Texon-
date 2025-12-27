@component('mail::message')

# New Enquiry Received

A new enquiry has been submitted. Please review the details below.

**Enquiry Details:**
- **Enquiry ID:** {{ $enquiry->enquiry_id }}
- **Product:** {{ $enquiry->product->product_name ?? 'N/A' }}
- **Name:** {{ $enquiry->user_name }}
- **Email:** {{ $enquiry->user_email }}
- **Phone:** {{ $enquiry->user_phone }}
- **Company:** {{ $enquiry->company }}
- **Message:** {{ $enquiry->message }}
- **Status:** {{ $enquiry->status }}
- **Submitted At:** {{ $enquiry->created_at->format('d M Y H:i') }}

Please log in to the admin panel to view and respond to this enquiry.

@endcomponent