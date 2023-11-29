<?php
// This file was auto-generated from sdk-root/src/data/cloud9/2017-09-23/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-09-23', 'endpointPrefix' => 'cloud9', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'AWS Cloud9', 'serviceId' => 'Cloud9', 'signatureVersion' => 'v4', 'targetPrefix' => 'AWSCloud9WorkspaceManagementService', 'uid' => 'cloud9-2017-09-23', ], 'operations' => [ 'CreateEnvironmentEC2' => [ 'name' => 'CreateEnvironmentEC2', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateEnvironmentEC2Request', ], 'output' => [ 'shape' => 'CreateEnvironmentEC2Result', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], 'CreateEnvironmentMembership' => [ 'name' => 'CreateEnvironmentMembership', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateEnvironmentMembershipRequest', ], 'output' => [ 'shape' => 'CreateEnvironmentMembershipResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], 'DeleteEnvironment' => [ 'name' => 'DeleteEnvironment', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteEnvironmentRequest', ], 'output' => [ 'shape' => 'DeleteEnvironmentResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], 'DeleteEnvironmentMembership' => [ 'name' => 'DeleteEnvironmentMembership', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteEnvironmentMembershipRequest', ], 'output' => [ 'shape' => 'DeleteEnvironmentMembershipResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], 'DescribeEnvironmentMemberships' => [ 'name' => 'DescribeEnvironmentMemberships', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeEnvironmentMembershipsRequest', ], 'output' => [ 'shape' => 'DescribeEnvironmentMembershipsResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'DescribeEnvironmentStatus' => [ 'name' => 'DescribeEnvironmentStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeEnvironmentStatusRequest', ], 'output' => [ 'shape' => 'DescribeEnvironmentStatusResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'DescribeEnvironments' => [ 'name' => 'DescribeEnvironments', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeEnvironmentsRequest', ], 'output' => [ 'shape' => 'DescribeEnvironmentsResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'ListEnvironments' => [ 'name' => 'ListEnvironments', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListEnvironmentsRequest', ], 'output' => [ 'shape' => 'ListEnvironmentsResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'BadRequestException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConcurrentAccessException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConcurrentAccessException', ], ], ], 'UpdateEnvironment' => [ 'name' => 'UpdateEnvironment', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateEnvironmentRequest', ], 'output' => [ 'shape' => 'UpdateEnvironmentResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], 'UpdateEnvironmentMembership' => [ 'name' => 'UpdateEnvironmentMembership', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateEnvironmentMembershipRequest', ], 'output' => [ 'shape' => 'UpdateEnvironmentMembershipResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServerErrorException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AutomaticStopTimeMinutes' => [ 'type' => 'integer', 'box' => true, 'max' => 20160, 'min' => 0, ], 'BadRequestException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'BoundedEnvironmentIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentId', ], 'max' => 25, 'min' => 1, ], 'ClientRequestToken' => [ 'type' => 'string', 'pattern' => '[\\x20-\\x7E]{10,128}', ], 'ConcurrentAccessException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ConflictException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ConnectionType' => [ 'type' => 'string', 'enum' => [ 'CONNECT_SSH', 'CONNECT_SSM', ], ], 'CreateEnvironmentEC2Request' => [ 'type' => 'structure', 'required' => [ 'name', 'instanceType', ], 'members' => [ 'name' => [ 'shape' => 'EnvironmentName', ], 'description' => [ 'shape' => 'EnvironmentDescription', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], 'instanceType' => [ 'shape' => 'InstanceType', ], 'subnetId' => [ 'shape' => 'SubnetId', ], 'imageId' => [ 'shape' => 'ImageId', ], 'automaticStopTimeMinutes' => [ 'shape' => 'AutomaticStopTimeMinutes', ], 'ownerArn' => [ 'shape' => 'UserArn', ], 'tags' => [ 'shape' => 'TagList', ], 'connectionType' => [ 'shape' => 'ConnectionType', ], 'dryRun' => [ 'shape' => 'NullableBoolean', ], ], ], 'CreateEnvironmentEC2Result' => [ 'type' => 'structure', 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], ], ], 'CreateEnvironmentMembershipRequest' => [ 'type' => 'structure', 'required' => [ 'environmentId', 'userArn', 'permissions', ], 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'userArn' => [ 'shape' => 'UserArn', ], 'permissions' => [ 'shape' => 'MemberPermissions', ], ], ], 'CreateEnvironmentMembershipResult' => [ 'type' => 'structure', 'required' => [ 'membership', ], 'members' => [ 'membership' => [ 'shape' => 'EnvironmentMember', ], ], ], 'DeleteEnvironmentMembershipRequest' => [ 'type' => 'structure', 'required' => [ 'environmentId', 'userArn', ], 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'userArn' => [ 'shape' => 'UserArn', ], ], ], 'DeleteEnvironmentMembershipResult' => [ 'type' => 'structure', 'members' => [], ], 'DeleteEnvironmentRequest' => [ 'type' => 'structure', 'required' => [ 'environmentId', ], 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], ], ], 'DeleteEnvironmentResult' => [ 'type' => 'structure', 'members' => [], ], 'DescribeEnvironmentMembershipsRequest' => [ 'type' => 'structure', 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'permissions' => [ 'shape' => 'PermissionsList', ], 'nextToken' => [ 'shape' => 'String', ], 'maxResults' => [ 'shape' => 'MaxResults', ], ], ], 'DescribeEnvironmentMembershipsResult' => [ 'type' => 'structure', 'members' => [ 'memberships' => [ 'shape' => 'EnvironmentMembersList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'DescribeEnvironmentStatusRequest' => [ 'type' => 'structure', 'required' => [ 'environmentId', ], 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], ], ], 'DescribeEnvironmentStatusResult' => [ 'type' => 'structure', 'required' => [ 'status', 'message', ], 'members' => [ 'status' => [ 'shape' => 'EnvironmentStatus', ], 'message' => [ 'shape' => 'String', ], ], ], 'DescribeEnvironmentsRequest' => [ 'type' => 'structure', 'required' => [ 'environmentIds', ], 'members' => [ 'environmentIds' => [ 'shape' => 'BoundedEnvironmentIdList', ], ], ], 'DescribeEnvironmentsResult' => [ 'type' => 'structure', 'members' => [ 'environments' => [ 'shape' => 'EnvironmentList', ], ], ], 'Environment' => [ 'type' => 'structure', 'required' => [ 'type', 'arn', 'ownerArn', ], 'members' => [ 'id' => [ 'shape' => 'EnvironmentId', ], 'name' => [ 'shape' => 'EnvironmentName', ], 'description' => [ 'shape' => 'EnvironmentDescription', ], 'type' => [ 'shape' => 'EnvironmentType', ], 'connectionType' => [ 'shape' => 'ConnectionType', ], 'arn' => [ 'shape' => 'String', ], 'ownerArn' => [ 'shape' => 'String', ], 'lifecycle' => [ 'shape' => 'EnvironmentLifecycle', ], 'managedCredentialsStatus' => [ 'shape' => 'ManagedCredentialsStatus', ], ], ], 'EnvironmentArn' => [ 'type' => 'string', 'pattern' => 'arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):cloud9:([a-z]{2}-[a-z]+-\\d{1}):[0-9]{12}:environment:[a-zA-Z0-9]{8,32}', ], 'EnvironmentDescription' => [ 'type' => 'string', 'max' => 200, 'sensitive' => true, ], 'EnvironmentId' => [ 'type' => 'string', 'pattern' => '^[a-zA-Z0-9]{8,32}$', ], 'EnvironmentIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentId', ], ], 'EnvironmentLifecycle' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'EnvironmentLifecycleStatus', ], 'reason' => [ 'shape' => 'String', ], 'failureResource' => [ 'shape' => 'String', ], ], ], 'EnvironmentLifecycleStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'CREATED', 'CREATE_FAILED', 'DELETING', 'DELETE_FAILED', ], ], 'EnvironmentList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Environment', ], ], 'EnvironmentMember' => [ 'type' => 'structure', 'required' => [ 'permissions', 'userId', 'userArn', 'environmentId', ], 'members' => [ 'permissions' => [ 'shape' => 'Permissions', ], 'userId' => [ 'shape' => 'String', ], 'userArn' => [ 'shape' => 'UserArn', ], 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'lastAccess' => [ 'shape' => 'Timestamp', ], ], ], 'EnvironmentMembersList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentMember', ], ], 'EnvironmentName' => [ 'type' => 'string', 'max' => 60, 'min' => 1, ], 'EnvironmentStatus' => [ 'type' => 'string', 'enum' => [ 'error', 'creating', 'connecting', 'ready', 'stopping', 'stopped', 'deleting', ], ], 'EnvironmentType' => [ 'type' => 'string', 'enum' => [ 'ssh', 'ec2', ], ], 'ForbiddenException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ImageId' => [ 'type' => 'string', 'max' => 512, ], 'InstanceType' => [ 'type' => 'string', 'max' => 20, 'min' => 5, 'pattern' => '^[a-z][1-9][.][a-z0-9]+$', ], 'InternalServerErrorException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, 'fault' => true, ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ListEnvironmentsRequest' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'maxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListEnvironmentsResult' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'environmentIds' => [ 'shape' => 'EnvironmentIdList', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'EnvironmentArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagList', ], ], ], 'ManagedCredentialsAction' => [ 'type' => 'string', 'enum' => [ 'ENABLE', 'DISABLE', ], ], 'ManagedCredentialsStatus' => [ 'type' => 'string', 'enum' => [ 'ENABLED_ON_CREATE', 'ENABLED_BY_OWNER', 'DISABLED_BY_DEFAULT', 'DISABLED_BY_OWNER', 'DISABLED_BY_COLLABORATOR', 'PENDING_REMOVAL_BY_COLLABORATOR', 'PENDING_START_REMOVAL_BY_COLLABORATOR', 'PENDING_REMOVAL_BY_OWNER', 'PENDING_START_REMOVAL_BY_OWNER', 'FAILED_REMOVAL_BY_COLLABORATOR', 'FAILED_REMOVAL_BY_OWNER', ], ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 25, 'min' => 0, ], 'MemberPermissions' => [ 'type' => 'string', 'enum' => [ 'read-write', 'read-only', ], ], 'NotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'NullableBoolean' => [ 'type' => 'boolean', ], 'Permissions' => [ 'type' => 'string', 'enum' => [ 'owner', 'read-write', 'read-only', ], ], 'PermissionsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Permissions', ], ], 'String' => [ 'type' => 'string', ], 'SubnetId' => [ 'type' => 'string', 'max' => 24, 'min' => 15, 'pattern' => '^(subnet-[0-9a-f]{8}|subnet-[0-9a-f]{17})$', ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', 'Value', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], 'sensitive' => true, ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'sensitive' => true, ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 0, 'sensitive' => true, ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 200, 'min' => 0, 'sensitive' => true, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'Tags', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'EnvironmentArn', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'sensitive' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'TooManyRequestsException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'TagKeys', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'EnvironmentArn', ], 'TagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateEnvironmentMembershipRequest' => [ 'type' => 'structure', 'required' => [ 'environmentId', 'userArn', 'permissions', ], 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'userArn' => [ 'shape' => 'UserArn', ], 'permissions' => [ 'shape' => 'MemberPermissions', ], ], ], 'UpdateEnvironmentMembershipResult' => [ 'type' => 'structure', 'members' => [ 'membership' => [ 'shape' => 'EnvironmentMember', ], ], ], 'UpdateEnvironmentRequest' => [ 'type' => 'structure', 'required' => [ 'environmentId', ], 'members' => [ 'environmentId' => [ 'shape' => 'EnvironmentId', ], 'name' => [ 'shape' => 'EnvironmentName', ], 'description' => [ 'shape' => 'EnvironmentDescription', ], 'managedCredentialsAction' => [ 'shape' => 'ManagedCredentialsAction', ], ], ], 'UpdateEnvironmentResult' => [ 'type' => 'structure', 'members' => [], ], 'UserArn' => [ 'type' => 'string', 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):(iam|sts)::\\d+:(root|(user\\/[\\w+=/:,.@-]{1,64}|federated-user\\/[\\w+=/:,.@-]{2,32}|assumed-role\\/[\\w+=:,.@-]{1,64}\\/[\\w+=,.@-]{1,64}))$', ], ],];
