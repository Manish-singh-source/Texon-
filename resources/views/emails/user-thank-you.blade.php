@component('mail::message')

# Thank You for Your Enquiry

Dear {{ $enquiry->user_name }},

Thank you for submitting your enquiry for the product. We have received your details and will get back to you soon.

**Enquiry Details:**
- **Enquiry ID:** {{ $enquiry->enquiry_id }}
- **Product:** {{ $enquiry->product->product_name ?? 'N/A' }}
- **Name:** {{ $enquiry->user_name }}
- **Email:** {{ $enquiry->user_email }}
- **Phone:** {{ $enquiry->user_phone }}
- **Company:** {{ $enquiry->company }}
- **Message:** {{ $enquiry->message }}

We appreciate your interest and will respond as soon as possible.

Best regards,  
{{ config('app.name') }} Team

@endcomponent