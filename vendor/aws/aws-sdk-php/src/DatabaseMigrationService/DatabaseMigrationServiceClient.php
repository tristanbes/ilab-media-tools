<?php
namespace ILAB_Aws\DatabaseMigrationService;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Database Migration Service** service.
 * @method \ILAB_Aws\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result createEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEndpointAsync(array $args = [])
 * @method \ILAB_Aws\Result createReplicationInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result createReplicationSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationSubnetGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result createReplicationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEndpointAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteReplicationInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteReplicationSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationSubnetGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteReplicationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAccountAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeEndpointTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointTypesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeOrderableReplicationInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrderableReplicationInstancesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeRefreshSchemasStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRefreshSchemasStatusAsync(array $args = [])
 * @method \ILAB_Aws\Result describeReplicationInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationInstancesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeReplicationSubnetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationSubnetGroupsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeReplicationTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationTasksAsync(array $args = [])
 * @method \ILAB_Aws\Result describeSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSchemasAsync(array $args = [])
 * @method \ILAB_Aws\Result describeTableStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTableStatisticsAsync(array $args = [])
 * @method \ILAB_Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result modifyEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyEndpointAsync(array $args = [])
 * @method \ILAB_Aws\Result modifyReplicationInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReplicationInstanceAsync(array $args = [])
 * @method \ILAB_Aws\Result modifyReplicationSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReplicationSubnetGroupAsync(array $args = [])
 * @method \ILAB_Aws\Result refreshSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise refreshSchemasAsync(array $args = [])
 * @method \ILAB_Aws\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result startReplicationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startReplicationTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result stopReplicationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopReplicationTaskAsync(array $args = [])
 * @method \ILAB_Aws\Result testConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testConnectionAsync(array $args = [])
 */
class DatabaseMigrationServiceClient extends AwsClient {}