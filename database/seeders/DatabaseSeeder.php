<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\StaffMember;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        //  10 IT Department Courses Details
        $courses = [
            [
                'code'          => 'ITT405',
                'name'          => 'Human  Computer Interaction & Interface Design',
                'credits'       => 3,
                'prerequisites' => null,
                'description'   => 'A foundational survey of IT concepts including hardware, software, networking, and digital literacy. Students explore the role of technology in business and society.',
            ],
            [
                'code'          => 'ITT103',
                'name'          => 'Programming Techniques',
                'credits'       => 3,
                'prerequisites' => null,
                'description'   => 'An introduction to programming logic and problem-solving using Python. Topics include variables, control structures, functions, and basic algorithms.',
            ],
            [
                'code'          => 'ITT201',
                'name'          => 'Database Management Systems',
                'credits'       => 3,
                'prerequisites' => 'IT103',
                'description'   => 'Covers relational database theory, SQL, data modeling using ER diagrams, normalization, and database administration using MySQL.',
            ],
            [
                'code'          => 'ITT208',
                'name'          => 'Internet Authering I',
                'credits'       => 3,
                'prerequisites' => 'ITT103',
                'description'   => 'Introduction to front-end web development with HTML5, CSS3, and JavaScript. Students build responsive, accessible web pages.',
            ],
            [
                'code'          => 'ITT203',
                'name'          => 'Data Communications & Networks I',
                'credits'       => 3,
                'prerequisites' => 'ITT107',
                'description'   => 'Study of networking concepts including OSI model, TCP/IP, LAN/WAN topologies, routing, switching, and basic network security.',
            ],
            [
                'code'          => 'ITT310',
                'name'          => 'Systems Analysis and Design',
                'credits'       => 3,
                'prerequisites' => 'ITT210',
                'description'   => 'Methodologies for analyzing business processes and designing information systems. Covers SDLC, UML, use cases, and prototyping.',
            ],
            [
                'code'          => 'ITT302',
                'name'          => 'Internet Authering II',
                'credits'       => 3,
                'prerequisites' => 'ITT202',
                'description'   => 'Advanced web development using a server-side framework (Laravel PHP). Covers PHP, XAMPP, MySQL, phyMyAdmin, authentication, and deployment.',
            ],
            [
                'code'          => 'ITT408',
                'name'          => 'Information Assurance and Security',
                'credits'       => 3,
                'prerequisites' => 'ITT208 & ITT210',
                'description'   => 'Introduction to cybersecurity principles including threat modeling, encryption, firewalls, ethical hacking, and security policies.',
            ],
            [
                'code'          => 'ITT402',
                'name'          => 'Mobile Application Development',
                'credits'       => 3,
                'prerequisites' => null,
                'description'   => 'Design and development of cross-platform mobile applications. Topics cover the UI/UX principles and pratices to develop an Android Application.',
            ],
            [
                'code'          => 'ITT411',
                'name'          => 'Project+',
                'credits'       => 3,
                'prerequisites' => null,
                'description'   => 'Principles of managing IT projects including planning, scheduling, risk assessment, team leadership, and Agile/Scrum methodologies.',
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(['code' => $course['code']], $course);
        }

        // Faculty & Staff Information 
        $staff = [
            [
                'name'  => 'Dr. Otis Osbourne',
                'role'  => 'Head of Department',
                'phone' => '+1 (876) 927-0000',
                'email' => 'ithod@ucc.edu.jm',
                'photo' => null,
            ],
            [
                'name'  => 'Ms. Sandra Clarke',
                'role'  => 'Lecturer',
                'phone' => '+1 (876) 927-0001',
                'email' => 'sclarke@faculty.ucc.edu.jm',
                'photo' => null,
            ],
            [
                'name'  => 'Mr. Neil Williams',
                'role'  => 'Lecturer',
                'phone' => '+1 (876) 927-0002',
                'email' => 'nwilliams@faculty.ucc.edu.jm',
                'photo' => null,
            ],
            [
                'name'  => 'Ms. Keisha Williams',
                'role'  => 'Lecturer',
                'phone' => '+1 (876) 927-0003',
                'email' => 'kwilliams@faculty.ucc.edu.jm',
                'photo' => null,
            ],
            [
                'name'  => 'Mr. Andre Campbell',
                'role'  => 'Lecturer',
                'phone' => '+1 (876) 927-0004',
                'email' => 'acampbell@faculty.ucc.edu.jm',
                'photo' => null,
            ],
            [
                'name'  => 'Mr. Craig Wilmot',
                'role'  => 'Program Coordinator',
                'phone' => '+1 (876) 927-0005',
                'email' => 'itprogofficer4@ucc.edu.jm',
                'photo' => null,
            ],
        ];

        foreach ($staff as $member) {
            StaffMember::updateOrCreate(['email' => $member['email']], $member);
        }
    }
}
