<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/Geovanka/Project_WebProg/blob/main/SponstoreLogo.jpeg?raw=true" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



## Team Members and Responsibilities

### 1. **Geovanka Thersia Kurniawan** (NIM: 2602123572)
   - **Responsibilities**: 
     - Designing and implementing the website's back-end architecture using Laravel 11.
     - Managing the database structure for sponsors, proposals, and events.
     - Creating API endpoints for front-end integration.

### 2. **Kent Christopher Hansel** (NIM: 2602067634)
   - **Responsibilities**: 
     - Designing and implementing the website's back-end architecture using Laravel 11.
     - Managing the database structure for sponsors, proposals, and events.
     - Creating API endpoints for front-end integration.
        
### 3. **Shanna Carlynda Fernlie** (NIM: 2602077843)
   - **Responsibilities**: 
     - Designing and implementing the website's back-end architecture using Laravel 11.
     - Managing the database structure for sponsors, proposals, and events.
     - Creating API endpoints for front-end integration.
        
### 4. **Vincentius Axelle Tanoto** (NIM: 2602057690)
   - **Responsibilities**: 
     - Designing and implementing the website's back-end architecture using Laravel 11.
     - Managing the database structure for sponsors, proposals, and events.
     - Creating API endpoints for front-end integration.



## About Sponstore

Sponstore is an innovative platform designed to simplify the process for student organizations to find and collaborate with sponsors for their events and activities. With integrated features, Sponstore streamlines sponsorship proposal submissions, communication, and management, making the process more efficient and transparent.

Sponstore aligns with Sustainable Development Goal (SDG) 17: Partnerships for the Goals, by connecting student organizations with potential sponsors to foster mutually beneficial collaborations. This platform strengthens strategic partnerships that contribute to the sustainability of positive initiatives within campus communities and beyond.



## Deployment

You can access the deployed website here:

[Sponstore Website](www.youtube.com)



## Entity Relationship Diagram (ERD)

The Entity Relationship Diagram (ERD) below illustrates the structure of the database used by Sponstore, highlighting the relationships between the entities.

![ERD](https://github.com/Geovanka/Project_WebProg/blob/main/ERD_Sponstore.png?raw=true)



## Website Layout, Structure, and Functions

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).



## Main Features Description

### 1. Event Creation (User - Student Organization)

User (student organizations) can create events by providing the following details:
- **Event Name**: The title of the event.
- **Event Date**: The date when the event will take place.
- **Event Description**: A brief summary of the event, its purpose, and what participants can expect.
- **Event Location**: The venue or location where the event will occur.

Once the event details are provided, users can save and submit the event to begin searching for sponsors.

### 2. Sponsorship Proposal Submission (User - Student Organization)
Users can select or search from a list of sponsors and then submit a proposal for the selected event. The process includes:
- **Sponsor Selection**: Search and choose sponsors from a predefined list.
- **Proposal Template**: Download a proposal template and fill in the necessary details.
- **Proposal Submission**: Submit the filled proposal directly to the selected sponsor, aligned with the chosen event.

After submission, users can view the status of their proposals under the **Sent** menu.

### 3. Sponsor Review and Interaction (Sponsor - Company)
Sponsors can review the submitted proposals and take the following actions:
- **View Proposal**: Sponsors can read through the details of the event and the sponsorship request.
- **Accept or Reject Proposal**: Sponsors can either accept or reject the proposal based on their interest.
- **Negotiation**: Sponsors can initiate negotiations by providing feedback or notes, which are sent to the user for further discussion.

### 4. Proposal Status and Negotiation (User - Student Organization)
Users can track the status of their proposals through the **Inbox** menu, where they can see:
- **Accepted**: Proposals that have been accepted by sponsors.
- **Rejected**: Proposals that have been declined by sponsors.
- **Negotiated**: Proposals that are under negotiation, along with notes or feedback provided by the sponsors for further discussion.

### 5. Admin Control over Sponsors (Admin)
Admins have full control over the sponsor database and can perform the following actions:
- **Add New Sponsor**: Admins can add new sponsors to the website list.
- **Edit Sponsor Details**: Admins can edit the information of existing sponsors, such as contact details, sponsorship categories, etc.
- **Remove Sponsor**: Admins have the ability to remove sponsors from the list of available sponsors.

