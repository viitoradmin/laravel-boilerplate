## GIT Standards for development team.

MUST Mandatory for all Engineers who are part of this project to review GIT Standards

[GIT Standards and Guidelines](https://rockettech.atlassian.net/l/cp/yjnMbYYU).

Parent Branch - **main**

    Manage By Team Lead 
    Purpose - Production branch
    Access - Team Lead
    Server - Uploaded on production server.
    Note - Dont touch or update any code in this branch directly.

Development Branch - **staging**

    Manage By Team Lead and Backend Engineer
    Access - Team Lead
    Purpose - For development purpose and testing.
    Server - Uploaded on staging / uat / qa server.

Development Branch - **development**

    Manage By Team Lead and Backend Engineer
    Access - All Members
    Purpose - For development purpose and testing.
    Server - Uploaded on development server.

Developer/Engineers Branch - Eg - **feature/{feature_name}**

    Create a feature specific branch from development branch​.
    Update your feature branch with a remote parent branch.​
    Maintain the branch name throughout the project.​
    Feature branch name coule be - "feature/auth", "feature/user".​

For QUICK fixing on production server or in main branch

    Do not touch the main branch directly on production. For any changes in main, please create "hotfix-date"​ or "hotfix/date"
    Example:- It could be hotfix-* or like hotfix/29-08-2020​
    Manage By Team Lead or Sr. Engineer

Stash

    Don't forgot to Stash your uncommitted changes if you want to test or check any other branch in your local system without merge/pull.​

Stale / Completed / Unnecessary  Branch

    Remove stale branches or temp branches once work is done.​ (Duration after 10 days of completed work)



