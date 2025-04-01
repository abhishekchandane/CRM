<?php

require_once "../../config/Database.php";

class Roles {

    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    /**
     * Create a new role with permissions.
     */
    public function createRole($name, $description, $permissions) {
        try {
            $permission_type = 'custom';
            $query = "INSERT INTO roles (name, description, permission_type, permissions, created_at, updated_at)
                      VALUES (:name, :description, :permission_type, :permissions, NOW(), NOW())";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':permission_type', $permission_type);
            $stmt->bindParam(':permissions', $permissions);

            if ($stmt->execute()) {
                return [
                    'status' => 'success',
                    'message' => 'Role Created Successfully',
                    'redirect' => 'roles_list.php',
                    'data' => compact('name', 'description', 'permissions')
                ];
            } else {
                return ['status' => 'error', 'message' => 'Failed to Create Role'];
            }
        } catch (PDOException $e) {
            return ['status' => 'error', 'message' => 'Database Error: ' . $e->getMessage()];
        }
    }

    /**
     * Retrieve all roles.
     */
    public function getRoles() {
        try {
            $query = "SELECT id, name, description, permissions, created_at FROM roles ORDER BY created_at DESC";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $roles = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return ['status' => 'success', 'data' => $roles];
        } catch (PDOException $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    /**
     * Update role permissions.
     */
    public function updateRolePermissions($roleId, $permissions) {
        try {
            $stmt = $this->conn->prepare("UPDATE roles SET permissions = :permissions, updated_at = NOW() WHERE id = :roleId");
            $stmt->bindParam(':permissions', $permissions);
            $stmt->bindParam(':roleId', $roleId);

            if ($stmt->execute()) {
                return [
                    'status' => 'success',
                    'message' => 'Permissions updated successfully!',
                    'data' => ['roleId' => $roleId, 'permissions' => json_decode($permissions, true)]
                ];
            } else {
                return ['status' => 'error', 'message' => 'Failed to update permissions.'];
            }
        } catch (PDOException $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    /**
     * Delete a role by ID.
     */
    public function deleteRole($roleId) {
        try {
            $stmt = $this->conn->prepare("DELETE FROM roles WHERE id = :roleId");
            $stmt->bindParam(':roleId', $roleId);

            if ($stmt->execute()) {
                return ['status' => 'success', 'message' => 'Role deleted successfully.'];
            } else {
                return ['status' => 'error', 'message' => 'Failed to delete role.'];
            }
        } catch (PDOException $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    /**
     * Get role details by ID.
     */
    public function getRoleById($roleId) {
        try {
            $stmt = $this->conn->prepare("SELECT id, name, description, permissions FROM roles WHERE id = :roleId");
            $stmt->bindParam(':roleId', $roleId);
            $stmt->execute();
            $role = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($role) {
                return ['status' => 'success', 'data' => $role];
            } else {
                return ['status' => 'error', 'message' => 'Role not found.'];
            }
        } catch (PDOException $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    /**
     * Update role details (excluding permissions).
     */
    public function updateRoleDetails($roleId, $name, $description) {
        try {
            $stmt = $this->conn->prepare("UPDATE roles SET name = :name, description = :description, updated_at = NOW() WHERE id = :roleId");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':roleId', $roleId);

            if ($stmt->execute()) {
                return ['status' => 'success', 'message' => 'Role updated successfully.'];
            } else {
                return ['status' => 'error', 'message' => 'Failed to update role.'];
            }
        } catch (PDOException $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }
}

?>
