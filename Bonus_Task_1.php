<?php

    // sql query to get list of tenants renting more than one apartment
    $sql = `
        SELECT 
            *
        FROM 
            Tenants
        WHERE 
            TenantID 
                IN ( SELECT 
                        TenantID 
                    FROM 
                        AptTenants
                    GROUP BY 
                        AptTenants.TenantID 
                    HAVING 
                        COUNT(*) > 1
                );
    `;

    // My Explanation
    /* 
        SELECT 
            * 
        :This is to select all the tenant info
    */
    /* 
        FROM 
            Tenants
        :This is to specify the table to perform the sql statement in.
    */
    /*
        WHERE
            TenantID
        :This is to specify the column to search for
    */
    /*
        IN ()
        :This is to perform another SQL search in another table
    */
    /*
        SELECT 
            TenantID
        :This is to select the tenant id from the AptTenants table
    */
    /*
        FROM 
            AptTenants
        :This is to specify the table to perform the sql statement in.
    */
    /*
        GROUP BY 
            AptTenants.TenantID
        :This is to group the TenantsID and bring them together
    */
    /*
        HAVING 
            COUNT(*) > 1
        :This is to select the TenantsID groups that are greter than 1
    */




    // sql query to get list of all buildings
    $sql = `
        SELECT
            *,
            (SELECT COUNT(*) FROM Requests WHERE Requests.Status = 'open') AS OpenRequests
        FROM 
            Building;
    `;

    // My Explanation
    /* 
        SELECT 
            * 
        :This is to select all the building info
    */
    /* 
        (SELECT COUNT(*) FROM Requests WHERE Requests.Status = 'open') AS OpenRequests
        :This is to count, select and return as 'OpenRequests' all the open Request
    */
    /* 
        FROM 
            Building
        :This is to specify the table to perform the sql statement in.
    */

?>